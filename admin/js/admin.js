function toggleNav() {
    const adminHeaderleft = document.querySelector("#admin-headerLeft");
    const adminHeaderright = document.querySelector("#admin-headerRight");
    const adminSidebar = document.querySelector("#admin-sidebar");
    const adminPanel = document.querySelector("#admin-panel");
    const adminFooterleft = document.querySelector('#admin-footerLeft');
    const adminFooterright = document.querySelector('#admin-footerRight');
    const sidebarLebel = document.querySelectorAll('.lebel');
    const sidebarTitle = document.querySelectorAll('.title');


    // let afooterIcon = document.querySelector("#fIcon");

    if (adminHeaderleft.style.width === "5%") {
        adminHeaderleft.style.width = "20%";
        adminHeaderright.style.width = "80%";
        adminSidebar.style.width = "20%";
        adminPanel.style.width = "80%";
        adminFooterleft.style.width = "20%";
        adminFooterright.style.width = "80%";
        sidebarLebel.forEach(function (label) {
            label.style.display = "10%";
            label.style.postion = "10%";
         });
       

    }
    else {
        adminHeaderleft.style.width = "5%";
        adminHeaderright.style.width = "95%";
        adminSidebar.style.width = "5%";
        adminPanel.style.width = "95%";
        adminFooterleft.style.display = "none";
        adminFooterright.style.width = "95%";
        sidebarLebel.forEach(function (label) { 
            label.style.display = "none"; 
            label.style.postion = "none";
          
        });
        
    }
}



const faqQuestions = document.querySelectorAll('.admin-sidebarMenu-outerHead');

faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        const icon = question.querySelector('.icon');

        document.querySelectorAll('.admin-sidebarMenu-inner.open').forEach(openAnswer => {
            if (openAnswer !== answer) {
                openAnswer.classList.remove('open');
                openAnswer.previousElementSibling.querySelector('.icon').textContent = '+';
            }
        });

        if (answer.classList.contains('open')) {
            answer.classList.remove('open');
            icon.textContent = '+';
        } else {
            answer.classList.add('open');
            icon.textContent = '-';
        }
    });
});

// ===============admin-profileImage-popup js===========

let image = document.getElementById('admin-profileImage');
let popup = document.getElementById('admin-profileImage-popup');

image.addEventListener('click', () => {
    if (popup.style.display === "none") {
        popup.style.display = 'flex';
    }
    else {
        popup.style.display = 'none';
    }

});


// Toggle sidebar
document.querySelector('.toggle-btn').addEventListener('click', function () {
    const sidebar = document.querySelector('.admin-sidebar');
    sidebar.classList.toggle('collapsed');
    this.textContent = sidebar.classList.contains('collapsed') ? '✖' : '☰';
});
