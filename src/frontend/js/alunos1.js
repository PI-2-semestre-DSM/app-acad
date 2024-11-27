document.addEventListener("DOMContentLoaded", function() {
    const alunosLink = document.getElementById("link-alunos");
    alunosLink.addEventListener("click", function(event) {
        event.preventDefault(); 
        window.location.href = "alunos.html"; 
    });
});
