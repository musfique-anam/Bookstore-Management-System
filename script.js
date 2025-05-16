function goToPage1() {
    window.location.href = "index2.html"; 
}

function goToPage0() {
    window.location.href = "index.html"; 
}

function goToPage2() {
    window.location.href = "index3.html"; 
}

function goToPage3() {
    window.location.href = "index4.html"; 
}

function deleteItem() {
    const confirmDelete = confirm("Are you sure you want to delete this book?");
        if (confirmDelete) {
            alert("Book deleted!");
        }
}

//  function editBook() {
//       alert("Edit book logic here.");
//     }
