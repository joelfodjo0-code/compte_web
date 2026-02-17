document.addEventListener('DOMContentLoaded', () => {

    function sparkline(id, data, color, smooth = true) {
        const canvas = document.getElementById(id);
        if (!canvas) return;

        const ctx = canvas.getContext('2d');

        const gradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
        gradient.addColorStop(0, color + '55');
        gradient.addColorStop(1, color + '00');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: data.map((_, i) => i),
                datasets: [{
                    data,
                    borderColor: color,
                    backgroundColor: gradient,
                    fill: true,
                    tension: smooth ? 0.45 : 0,
                    borderWidth: 2,
                    pointRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                },
                scales: {
                    x: { display: false },
                    y: { display: false }
                }
            }
        });
    }

    sparkline('chartRevenue', [20, 45, 30, 55, 35, 58, 90, 1, 100], '#22c55e', false);
    sparkline('chartClients', [200, 260, 240, 300, 280], '#22c55e');
    sparkline('chartProducts', [20, 85, 50, 75, 45], '#ef4444');


    function openOverlayById(id) {
        const overlay = document.getElementById(id);
        if (!overlay) return;

        closeAllOverlays();
        overlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeAllOverlays() {
        document.querySelectorAll('.overlay').forEach(o => {
            o.classList.add('hidden');
        });
        document.body.style.overflow = '';
    }


    document.getElementById('openExportPrice')
        ?.addEventListener('click', () =>
            openOverlayById('exportPriceOverlay')
        );

    document.getElementById('openCreateDate')
        ?.addEventListener('click', () =>
            openOverlayById('filterOverlay')
        );

    document.querySelectorAll('[data-close]')
        .forEach(btn => btn.addEventListener('click', closeAllOverlays));

    document.getElementById('openEditColumns')
        ?.addEventListener('click', () =>
            openOverlayById('editColumnsOverlay')
        );



    // Ajouter un produit =====
    document.getElementById('openAddProduct')
        ?.addEventListener('click', () =>
            openOverlayById('addProductOverlay')
        );

    // Fonction pour réinitialiser le formulaire produit
    function resetProductForm() {
        const overlay = document.getElementById('addProductOverlay');
        if (!overlay) return;

        // Réinitialiser tous les champs
        overlay.querySelectorAll('input[type="text"], input[type="number"], textarea').forEach(input => {
            input.value = '';
        });

        // Réinitialiser le radio à "Inscription"
        const inscriptionRadio = overlay.querySelector('#price_inscription');
        if (inscriptionRadio) {
            inscriptionRadio.checked = true;
        }

        // Réinitialiser la zone d'upload
        const mediaUploadZone = overlay.querySelector('#mediaUploadZone');
        const mediaInput = overlay.querySelector('#mediaInput');
        
        if (mediaUploadZone && mediaInput) {
            // Supprimer la prévisualisation
            const preview = mediaUploadZone.querySelector('.media-preview');
            if (preview) {
                preview.remove();
            }

            // Réafficher le contenu initial
            const initialContent = mediaUploadZone.querySelector('.media-upload-initial');
            if (initialContent) {
                initialContent.style.display = 'block';
            }

            // Réinitialiser l'input file
            mediaInput.value = '';
        }
    }

    // Gestion de la fermeture avec réinitialisation
    const originalCloseAllOverlays = closeAllOverlays;
    closeAllOverlays = function() {
        const productOverlay = document.getElementById('addProductOverlay');
        if (productOverlay && !productOverlay.classList.contains('hidden')) {
            resetProductForm();
        }
        originalCloseAllOverlays();
    };

    // Gestion de l'upload de média
    const mediaUploadZone = document.querySelector('#mediaUploadZone');
    const mediaInput = document.querySelector('#mediaInput');

    if (mediaUploadZone && mediaInput) {
        // Clic sur la zone d'upload
        mediaUploadZone.addEventListener('click', (e) => {
            if (e.target !== mediaInput && !e.target.closest('.media-preview')) {
                mediaInput.click();
            }
        });

        
        mediaUploadZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            mediaUploadZone.style.borderColor = '#2f4fde';
            mediaUploadZone.style.background = '#f5f7ff';
        });

        mediaUploadZone.addEventListener('dragleave', () => {
            mediaUploadZone.style.borderColor = '#ddd';
            mediaUploadZone.style.background = '#fafafa';
        });

        mediaUploadZone.addEventListener('drop', (e) => {
            e.preventDefault();
            mediaUploadZone.style.borderColor = '#ddd';
            mediaUploadZone.style.background = '#fafafa';

            const files = e.dataTransfer.files;
            if (files.length > 0) {
                handleMediaUpload(files[0]);
            }
        });

        // Changement de fichier via input
        mediaInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                handleMediaUpload(e.target.files[0]);
            }
        });
    }

    function handleMediaUpload(file) {
        // Vérifier le type de fichier
        if (!file.type.startsWith('image/')) {
            alert('Veuillez sélectionner une image');
            return;
        }

        // Vérifier la taille (1MB max)
        if (file.size > 1024 * 1024) {
            alert('La taille de l\'image ne doit pas dépasser 1MB');
            return;
        }

        const reader = new FileReader();
        reader.onload = (e) => {
            const mediaUploadZone = document.querySelector('#mediaUploadZone');
            
            // Cacher le contenu initial
            const initialContent = mediaUploadZone.querySelector('.media-upload-initial');
            if (initialContent) {
                initialContent.style.display = 'none';
            }

            // Supprimer l'ancienne prévisualisation si elle existe
            const oldPreview = mediaUploadZone.querySelector('.media-preview');
            if (oldPreview) {
                oldPreview.remove();
            }

            // Créer la nouvelle prévisualisation
            const preview = document.createElement('div');
            preview.className = 'media-preview';
            preview.innerHTML = `
                <img src="${e.target.result}" alt="Preview">
                <p>${file.name}</p>
            `;

            mediaUploadZone.appendChild(preview);
        };
        reader.readAsDataURL(file);

        console.log('Fichier uploadé:', file.name);
    }

});