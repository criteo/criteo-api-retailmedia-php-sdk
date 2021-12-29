<?php
namespace criteo\api\retailmedia\v2021_10;

use criteo\api\retailmedia\v2021_10\Api\GatewayApi;
use criteo\api\retailmedia\v2021_10\ClientCredentialsClient;
use criteo\api\retailmedia\v2021_10\ApiException;
use criteo\api\retailmedia\v2021_10\ObjectSerializer;
use Jchook\AssertThrows\AssertThrows;
use PHPUnit\Framework\TestCase;

class GatewayApiTest extends TestCase
{
    use AssertThrows;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @var int
     */
    private $applicationId;

    function __construct()
    {
        parent::__construct();
        
        $this->clientId = $_SERVER["TEST_CLIENT_ID"];
        $this->clientSecret = $_SERVER["TEST_CLIENT_SECRET"];
        $this->applicationId = $_SERVER["TEST_APPLICATION_ID"];
    }

    public function secretEnvironmentVariables()
    {
        $this->assertNotNull($this->clientId);
        $this->assertNotNull($this->clientSecret);
        $this->assertNotNull($this->applicationId);
    }

    public function testGetCurrentApplicationShouldSucceedWithValidToken()
    {
        // Arrange
        $api = new GatewayApi(new ClientCredentialsClient($this->clientId, $this->clientSecret));

        // Act
        $response = $api->getCurrentApplicationWithHttpInfo();

        // Assert
        $this->assertEquals(200, $response[1]);
        $this->assertEquals($this->applicationId, $response[0]->getData()->getId());
    }

    public function testGetCurrentApplicationShouldSucceedWithRenewedInvalidToken()
    {
        // Arrange
        $api = new GatewayApi(new ClientCredentialsClient($this->clientId, $this->clientSecret));
        $api->getConfig()->setAccessToken('invalid-access-token');

        // Act
        $response = $api->getCurrentApplicationWithHttpInfo();

        // Assert
        $this->assertEquals(200, $response[1]);
        $this->assertEquals($this->applicationId, $response[0]->getData()->getId());
    }

    public function testGetCurrentApplicationShouldFailWithoutToken()
    {
        $this->assertThrows(ApiException::class, 
            function() {
                // Arrange
                $api = new GatewayApi();

                // Act
                $api->getCurrentApplicationWithHttpInfo();
            },
            function($exception) {
                $data = ObjectSerializer::deserialize(
                    $exception->getResponseBody(),
                    '\criteo\api\retailmedia\v2021_10\Model\ApplicationSummaryModelResponse',
                    $exception->getResponseHeaders()
                );

                // Assert
                $this->assertEquals(401, $exception->getCode());
                $this->assertEquals('authorization', $data->getErrors()[0]->getType());
                $this->assertEquals('authorization-token-invalid', $data->getErrors()[0]->getCode());
            }
        );
    }
}
