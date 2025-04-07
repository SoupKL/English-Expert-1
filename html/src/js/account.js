// account.js

// Simulating course data
const courses = [
    { id: 'A1', name: 'Уровень А1', description: 'Идеальный выбор для абсолютных новичков.' },
    { id: 'A2', name: 'Уровень А2', description: 'Переходите от приветствий к простым разговорам.' },
    // Add more courses as needed
];

// Initialize storage if not present
if (!localStorage.getItem('purchasedCourses')) {
    localStorage.setItem('purchasedCourses', JSON.stringify([]));
}

if (!localStorage.getItem('trialCourses')) {
    localStorage.setItem('trialCourses', JSON.stringify([]));
}

// Render courses
function renderCourses() {
    const purchasedCourses = JSON.parse(localStorage.getItem('purchasedCourses'));
    const trialCourses = JSON.parse(localStorage.getItem('trialCourses'));

    const purchasedContainer = document.getElementById('purchased-courses');
    const trialContainer = document.getElementById('trial-courses');

    purchasedContainer.innerHTML = purchasedCourses.map(courseId => {
        const course = courses.find(c => c.id === courseId);
        return `<div class="course-card">${course.name}<p>${course.description}</p></div>`;
    }).join('');

    trialContainer.innerHTML = trialCourses.map(courseId => {
        const course = courses.find(c => c.id === courseId);
        return `<div class="course-card">${course.name}<p>${course.description}</p></div>`;
    }).join('');
}

// Simulate adding a purchased course
function purchaseCourse(courseId) {
    let purchasedCourses = JSON.parse(localStorage.getItem('purchasedCourses'));
    if (!purchasedCourses.includes(courseId)) {
        purchasedCourses.push(courseId);
        localStorage.setItem('purchasedCourses', JSON.stringify(purchasedCourses));
        renderCourses();
    }
}

// Simulate adding a trial course
function addTrialCourse(courseId) {
    let trialCourses = JSON.parse(localStorage.getItem('trialCourses'));
    if (!trialCourses.includes(courseId)) {
        trialCourses.push(courseId);
        localStorage.setItem('trialCourses', JSON.stringify(trialCourses));
        renderCourses();

        // Remove trial course after 1 week
        setTimeout(() => {
            trialCourses = JSON.parse(localStorage.getItem('trialCourses'));
            const index = trialCourses.indexOf(courseId);
            if (index > -1) {
                trialCourses.splice(index, 1);
                localStorage.setItem('trialCourses', JSON.stringify(trialCourses));
                renderCourses();
            }
        }, 7 * 24 * 60 * 60 * 1000);
    }
}

// Initial rendering
document.addEventListener('DOMContentLoaded', renderCourses);

document.querySelector('.card-form__button').addEventListener('click', function () {
    // Validate the card information here
    // If valid, proceed with course addition

    // For example, assume the course ID is 'A1'
    const courseId = 'A1';

    // Determine if it's a purchase or trial
    const isTrial = true; // This should be determined based on the button clicked on the course page

    if (isTrial) {
        addTrialCourse(courseId);
    } else {
        purchaseCourse(courseId);
    }

    // Close the modal and reset form fields as needed
});
