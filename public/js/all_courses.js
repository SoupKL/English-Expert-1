// Получаем ссылки на каждый блок
var A1 = document.getElementById('A1');
var A2 = document.getElementById('A2');
var B1 = document.getElementById('B1');
var B2 = document.getElementById('B2');
var C1 = document.getElementById('C1');
var C2 = document.getElementById('C2');
var work = document.getElementById('work');
var purpose = document.getElementById('purpose');

A1.addEventListener('click', function() {
    window.location.href = 'course_A1'; 
});

A2.addEventListener('click', function() {
    window.location.href = 'course_A2'; 
});

B1.addEventListener('click', function() {
    window.location.href = 'course_B1'; 
});

B1.addEventListener('click', function() {
    window.location.href = 'course_B1'; 
});

B2.addEventListener('click', function() {
    window.location.href = 'course_B2'; 
});

C1.addEventListener('click', function() {
    window.location.href = 'course_C1'; 
});

C2.addEventListener('click', function() {
    window.location.href = 'course_C2'; 
});

work.addEventListener('click', function() {
    window.location.href = 'work'; 
});

purpose.addEventListener('click', function() {
    window.location.href = 'purpose'; 
});