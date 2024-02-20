
document.addEventListener("DOMContentLoaded", function() {
    fetchPants();
});

function fetchPants() {
    
    fetch('pant.php')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // const employeeList = document.getElementById("employeeList");
        // employeeList.innerHTML = ""; // Clear existing data

        // data.forEach(employee => {
        //     const row = document.createElement("tr");
        //     row.innerHTML = `
        //         <td>${employee.id}</td>
        //         <td>${employee.name}</td>
        //         <td>${employee.email}</td>
        //     `;
        //     employeeList.appendChild(row);
        // });
    })
    .catch(error => {
        console.error("Error:", error);
    });
}