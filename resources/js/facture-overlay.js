document.addEventListener('DOMContentLoaded', () => {
    console.log('Facture overlay loaded');

    const openBtn = document.getElementById('openFactureOverlay');
    const closeBtn = document.getElementById('closeOverlay');
    const overlay = document.getElementById('factureOverlay');
    const previewBtn = document.getElementById('showPreviewBtn');
    const secondOverlay = document.getElementById('secondOverlay');
    const closeSecondBtn = document.getElementById('closeSecondOverlay');

    //  Empêcher le scroll de l'arrière-plan
    function disableBodyScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableBodyScroll() {
        document.body.style.overflow = '';
    }

    // Ouvrir le premier overlay
    if (openBtn) {
        openBtn.addEventListener('click', () => {
            overlay.classList.add('active');
            disableBodyScroll(); 
        });
    }

    // Fermer le premier overlay
    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            overlay.classList.remove('active');
            overlay.classList.remove('shifted');
            if (secondOverlay) {
                secondOverlay.classList.remove('active');
            }
            enableBodyScroll(); // Réactiver le scroll
        });
    }

    if (overlay) {
        const backdrop = overlay.querySelector('.overlay-backdrop');
        if (backdrop) {
            backdrop.addEventListener('click', () => {
                overlay.classList.remove('active');
                overlay.classList.remove('shifted');
                if (secondOverlay) {
                    secondOverlay.classList.remove('active');
                }
                enableBodyScroll(); // Réactiver le scroll
            });
        }
    }

    // Montrer l'aperçu ouverture du second overlay
    if (previewBtn) {
        previewBtn.addEventListener('click', () => {
            overlay.classList.add('shifted');
            if (secondOverlay) {
                secondOverlay.classList.add('active');
            }
        });
    }

    // Fermer le second overlay
    if (closeSecondBtn) {
        closeSecondBtn.addEventListener('click', () => {
            secondOverlay.classList.remove('active');
            overlay.classList.remove('shifted');
        });
    }

    // Gestion des onglets dans le second overlay avec indicateur animé
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabIndicator = document.querySelector('.tab-indicator');
    
    tabBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            if (tabIndicator) {
                tabIndicator.style.left = `${index * 33.33}%`;
            }
        });
    });

    const radioOptions = document.querySelectorAll('.radio-option');
    radioOptions.forEach(option => {
        option.addEventListener('click', () => {
            radioOptions.forEach(opt => opt.classList.remove('selected'));
            option.classList.add('selected');
            const radio = option.querySelector('input[type="radio"]');
            if (radio) radio.checked = true;
        });
    });




// Gestion du client overlay 
const openClientBtn = document.getElementById('openClientOverlay');
const clientOverlay = document.getElementById('clientOverlay');
const closeClientBtn = document.getElementById('closeClientOverlay');
const cancelClientBtn = document.getElementById('cancelClientBtn');

if (openClientBtn) {
    openClientBtn.addEventListener('click', () => {
    
        overlay.classList.remove('active');
     
        clientOverlay.classList.add('active');
    });
}

if (closeClientBtn) {
    closeClientBtn.addEventListener('click', () => {
        clientOverlay.classList.remove('active');
   
        overlay.classList.add('active');
    });
}

if (cancelClientBtn) {
    cancelClientBtn.addEventListener('click', () => {
        clientOverlay.classList.remove('active');
       
        overlay.classList.add('active');
    });
}

if (clientOverlay) {
    const clientBackdrop = clientOverlay.querySelector('.client-overlay-backdrop');
    if (clientBackdrop) {
        clientBackdrop.addEventListener('click', () => {
            clientOverlay.classList.remove('active');
        
            overlay.classList.add('active');
        });
    }
}


// Gestion de l'overlay Éditer colonnes
const openEditColumnsBtn = document.getElementById('openEditColumns');
const editColumnsOverlay = document.getElementById('editColumnsOverlay');

if (openEditColumnsBtn && editColumnsOverlay) {
    openEditColumnsBtn.addEventListener('click', () => {
        editColumnsOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; 
    });

    const closeEditBtn = editColumnsOverlay.querySelector('[data-close]');
    if (closeEditBtn) {
        closeEditBtn.addEventListener('click', () => {
            editColumnsOverlay.classList.add('hidden');
            document.body.style.overflow = ''; 
        });
    }
}
});