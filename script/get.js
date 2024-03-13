const apiUrl = 'http://localhost:8090/api/get-test.php';

function fetchDataFromApi(apiUrl) {
    return fetch(apiUrl)
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            console.log("Fetch successful");
            return response.json();
        })
        .then((dataArray) => {
            if (Array.isArray(dataArray)) {
                return dataArray;
            } else {
                throw new Error("Invalid response format");
            }
        })
        .then((dataArray) => {
            // Process the array of data and append to the list
            const dataList = document.getElementById('data-list');
            dataArray.forEach((data) => {
                const listItem = document.createElement('li');
                listItem.textContent = `
                    CusId: ${data.cusid}, 
                    Firstname: ${data.firstname}, 
                    Lastname: ${data.lastname},
                    Mobile No: ${data.mobileno},
                    Status: ${data.status}`;
                dataList.appendChild(listItem);
            });
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
            throw error;
        });
}

// Call the function when the page loads
fetchDataFromApi(apiUrl);
