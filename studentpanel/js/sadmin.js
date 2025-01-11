function toggleNav() {
    const sadminfNav = document.querySelector('.sadmin-fnav-header');
    const sadminsNav = document.querySelector('.sadmin-snav-header');
    const sadminmainNav = document.querySelector('.sadmin-heading');
    const sadminNav = document.querySelector('.sadmin-panel-lftside');
    const sadmintext = document.querySelectorAll('.sadmin-panel-lftside-text');
    const sadminspan = document.querySelectorAll('.sadmin-span');
    const sadminPanel = document.querySelector('.sadmin-panel-rhtside');
    const footerIcons = document.querySelectorAll('.sadmin-ficon');
    const leftFooter = document.querySelector('.sadmin-leftsidefooter');
    const rightFooter = document.querySelector('.sadmin-Rightsidefooter');

    // Check the current width of the navigation
    if (sadminNav.style.width === "4%") {
        // Expand navigation
        if (sadminfNav) sadminfNav.style.width = "20%";
        if (sadminsNav) sadminsNav.style.width = "80%";
        sadminNav.style.width = "20%";
        sadminPanel.style.width = "80%";
        leftFooter.style.width = "20%";
        rightFooter.style.width = "80%";

        // Display the spans and hide other text
        sadmintext.forEach(text => text.style.display = "block");
        //sadminspan.forEach(span => span.style.display = "none");

        footerIcons.forEach(icon => {
            icon.style.display = "inline-block";
        });

        if (sadminmainNav) sadminmainNav.style.display = "block";
    } 
    else {

        if (sadminfNav) sadminfNav.style.width = "4%";
        if (sadminsNav) sadminsNav.style.width = "96%";
        sadminNav.style.width = "4%";
        sadminPanel.style.width = "96%";
        leftFooter.style.width = "4%";
        rightFooter.style.width = "96%";


        sadmintext.forEach(text => text.style.display = "none");
        sadminspan.forEach(span => span.style.display = "block");

        footerIcons.forEach(icon => {
            icon.style.display = "none";
        });

        if (sadminmainNav) sadminmainNav.style.display = "none";
    }
}


let image = document.getElementById('sadmin-profileImage');
let popup = document.getElementById('sadmin-profileImage-popup');

image.addEventListener('click', () => {
    if (popup.style.display === "none" || popup.style.display === "") {
        popup.style.display = 'flex';
    } else {
        popup.style.display = 'none';
    }
});
