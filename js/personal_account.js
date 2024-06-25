document.getElementById('file-upload').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = new Image();
            img.onload = function() {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                
                // Вычисляем размеры обрезки
                const size = Math.min(img.width, img.height);
                const x = (img.width - size) / 2;
                const y = (img.height - size) / 2;

                canvas.width = size;
                canvas.height = size;
                ctx.drawImage(img, x, y, size, size, 0, 0, size, size);

                document.getElementById('avatar').src = canvas.toDataURL();
            };
            img.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});

let currentPage = 1;
const coursesPerPage = 5;

function showPage(page) {
    const purchasedCourses = document.querySelectorAll('#purchased .course');
    const trialCourses = document.querySelectorAll('#trial .course');
    const allCourses = [...purchasedCourses, ...trialCourses];

    allCourses.forEach((course, index) => {
        course.style.display = 'none';
        if (index >= (page - 1) * coursesPerPage && index < page * coursesPerPage) {
            course.style.display = 'block';
        }
    });

    document.querySelector('.pagination .prev').disabled = page === 1;
    document.querySelector('.pagination .next').disabled = page * coursesPerPage >= allCourses.length;
}

document.querySelector('.pagination .prev').addEventListener('click', function() {
    if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);
    }
});

document.querySelector('.pagination .next').addEventListener('click', function() {
    currentPage++;
    showPage(currentPage);
});

showPage(currentPage);
