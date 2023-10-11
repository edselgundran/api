"# api" 
# GitHub Setup
It defines multiple endpoints for handling name manipulation in a MySQL database, with credentials for database connectivity and exception handling. Responses are consistently formatted as JSON, and the Slim application listens for incoming HTTP requests.

 


## API
The Slim PHP framework-based API manages MySQL database names, using JSON for data exchange and PDO for communication with a demo database, handling common CRUD operations.


 


## API endpoints
1.Endpoint: /postName <br>
-Function: Adds a new name entry to a MySQL database. <br>
-Method: POST<br>
-Required Parameters :<br>
```json
{
  "lname": "Hortizuela",
  "fname": "Manny"
}
```

2.Endpoint: /printName<br>
-Function: Returns a predefined set of names in JSON format.<br>
-Method: POST<br>
-Required Parameters: None<br>

3.Endpoint: /updateName<br>
-Function: Updates an existing name entry in a MySQL database.<br>
-Method: PUT<br>
-Required Parameters:<br>
  id: The unique identifier of the name entry to be updated.<br>
  lname: New last name.<br>
  fname: New first name.<br>

4.Endpoint: /deleteName<br>
-Function: Deletes an existing name entry from a MySQL database.<br>
-Method: DELETE<br>
-Required Parameters:<br>
  id: The unique identifier of the name entry to be deleted.<br>
 


## Request
POST /postName<br>
To add a new name entry to the database, the example request is a JSON payload sent to the /postName endpoint with the first name "Manny" and the last name "Hortizuela" specified.<br>
```json
{
  "lname": "Hortizuela",
  "fname": "Manny"
}
```
PUT /updateName<br>
The example request is a JSON payload to update a name entry in the database, containing unique ID, new first and last names, indicating successful execution of the update.<br>
```json
  {
  "id": 1,
  "lname": "Wick",
  "fname": "John"
}
```
DELETE /deleteName<br>
The endpoint decodes JSON data, extracts unique identifiers, connects to MySQL database, deletes entry based on id.<br>
```json
{
  "id": 1
}
```


## Response
-Response Successful<br>
  Indicates that the insertion was successful.<br>
```json
{
  "status": "success",
  "data": null
}
```


-Response Error<br>
  Indicates an error during the database operation.<br>
```json
{
  "status": "error",
  "message": "An error occurred during database operation."
}
```
 


## Usage
1. GET Endpoint - /getName/{fname}/{lname}<br>
-Retrieves a greeting message by concatenating the provided first and last names.<br>
-Usage:<br>
-Make a GET request to /getName/{fname}/{lname} where {fname} and {lname} are the desired first and last names.<br>

2. POST Endpoint - /postName<br>
-Adds a new name entry to the database.<br>
-Usage:<br>
-Make a POST request to /postName with a JSON body containing the new first and last names.<br>
-Request Body:
![post](https://github.com/edselgundran/api/assets/147043070/1ab863ac-d494-4c23-8cbc-3f92ddb7fb3d)<br>
-Response:<br>
![postres](https://github.com/edselgundran/api/assets/147043070/fb5b5306-be4e-4276-8b1d-510c45d873e8)<br>

3. POST Endpoint - /printName<br>
-Description: Returns a predefined set of names in JSON format (Simulated response).<br>
-Usage:<br>
-Make a POST request to /printName.<br>
-Response:<br>
![print](https://github.com/edselgundran/api/assets/147043070/e490b46a-4644-42f6-951a-5f164d5074b3)<br>

4. PUT Endpoint - /updateName
-Description: Updates an existing name entry in the database.<br>
-Usage:<br>
-Make a PUT request to /updateName with a JSON body containing the ID of the entry to update, along with the new first and last names.<br>
-Request Body:<br>
![up](https://github.com/edselgundran/api/assets/147043070/dee89f05-fde6-4b0e-8a0c-a49629aec693)<br>

-Response:<br>
![upres](https://github.com/edselgundran/api/assets/147043070/c23b196a-2ccb-452b-8e23-a559732b4179)<br>

5. DELETE Endpoint - /deleteName
-Description: Deletes an existing name entry from the database.<br>
-Usage:<br>
-Make a DELETE request to /deleteName with a JSON body containing the ID of the entry to delete.<br>
-Request Body:<br>
![del](https://github.com/edselgundran/api/assets/147043070/4a6c4abc-27b1-4430-bb27-13a0fe708371)<br>

Response:<br>
![delres](https://github.com/edselgundran/api/assets/147043070/45d41ca8-69f3-473f-a625-93c1b19a031b)<br>


 


## License
Apache 2.0<br>


 


## Contributors
Edsel Jay A. Gundran
Edlhyn T. Mendeoro
