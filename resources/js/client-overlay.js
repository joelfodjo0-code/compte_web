document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.getElementById('clientOverlay');
    const closeBtn = document.getElementById('closeOverlay');
    const cancelBtn = document.getElementById('cancelOverlay');
    const addClientBtn = document.querySelector('.header-actions .btn-primary'); 
    

    addClientBtn.addEventListener('click', () => {
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    const closeOverlay = () => {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    };

    closeBtn.addEventListener('click', closeOverlay);
    cancelBtn.addEventListener('click', closeOverlay);

    overlay.querySelector('.overlay-backdrop')
        .addEventListener('click', closeOverlay);
});
