using APIVC.DTO;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using System.Text.Json;

namespace APIVC.Controllers.V2
{
    [ApiVersion("2.0")]
    [Route("api/v{version:apiVersion}/[controller]")]
    [ApiController]
    public class UsersControllerV2 : ControllerBase
    {

        private const string ApiTestURL = "https://fakestoreapi.com/products";

        private const string AppID = "6363827b7225737a05864a86";
        private readonly HttpClient _httpClient;

        public UsersControllerV2(HttpClient httpClient)
        {
            _httpClient = httpClient;
        }

        [MapToApiVersion("2.0")]
        [HttpGet(Name = "GetUsersData")]
        public async Task<IActionResult> GetUsersDataAsync()
        {

            // hacemos la petición a la URL
            var response = await _httpClient.GetStreamAsync(ApiTestURL);

            var productData = JsonSerializer.DeserializeAsyncEnumerable<Producto2>(response);

            return Ok(productData);

        }

    }
}