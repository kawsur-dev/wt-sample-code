function loadCourses() {

    const xhr = new XMLHttpRequest();
    xhr.onload = function () {
        let courses = JSON.parse(this.responseText);
        let rows = "";
        for (let i = 0; i < courses.length; i++) {
            rows += `
                    <tr>
                        <td>${courses[i].id}</td>
                        <td>${courses[i].name}</td>
                        <td>${courses[i].price}</td>
                    </tr>
                `;
        }
        document.getElementById("courseTable").innerHTML = rows;
    };
    xhr.open("GET", "../../controllers/CourseReloadController.php", true);
    xhr.send();
}

function validate(form) {
    const name = form.name.value;
    const price = form.price.value;
    let flag = true;

    document.getElementById("nameErr").innerHTML = "";
    document.getElementById("priceErr").innerHTML = "";

    if (name === "") {
        document.getElementById("nameErr").innerHTML = "Please fill up the name";
        flag = false;
    }
    if (price === "") {
        document.getElementById("priceErr").innerHTML = "Please fill up the price";
        flag = false;
    }
    else {
        if (Number.parseInt(price) < 0) {
            document.getElementById("priceErr").innerHTML = "Price should be greater than 0";
            flag = false;
        }
    }
    return flag;
}