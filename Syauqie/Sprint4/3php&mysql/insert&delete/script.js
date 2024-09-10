document.addEventListener("DOMContentLoaded", function() {
    const addStudentLink = document.getElementById('add-student');
    const studentTable = document.querySelector('#student-table tbody');

    // Sample function for adding a student row
    addStudentLink.addEventListener('click', function(e) {
        e.preventDefault();

        const newRow = document.createElement('tr');

        newRow.innerHTML = `
            <td>3</td>
            <td><a href="#" class="edit">ubah</a> | <a href="#" class="delete">hapus</a></td>
            <td><img src="https://via.placeholder.com/50" alt="avatar"></td>
            <td>123456789</td>
            <td>New Student</td>
            <td>newstudent@example.com</td>
            <td>Teknik Sipil</td>
        `;

        studentTable.appendChild(newRow);
    });

    // Sample function for handling edit and delete
    studentTable.addEventListener('click', function(e) {
        if (e.target.classList.contains('delete')) {
            e.preventDefault();
            e.target.closest('tr').remove();
        } else if (e.target.classList.contains('edit')) {
            e.preventDefault();
            alert('Edit student data functionality can be added here.');
        }
    });
});
