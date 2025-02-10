
<script>
    let currentStep = 1;
    const totalSteps = 6;

    function validateStep(step) {
        const currentStepElement = document.getElementById(`step${step}`);
        const requiredFields = currentStepElement.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value) {
                isValid = false;
                field.classList.add('border-red-500');

                // Ajouter un message d'erreur sous le champ
                const errorMsg = field.parentNode.querySelector('.error-message');
                if (!errorMsg) {
                    const msg = document.createElement('p');
                    msg.className = 'error-message text-red-500 text-sm mt-1';
                    msg.textContent = 'Ce champ est obligatoire';
                    field.parentNode.appendChild(msg);
                }
            } else {
                field.classList.remove('border-red-500');
                const errorMsg = field.parentNode.querySelector('.error-message');
                if (errorMsg) {
                    errorMsg.remove();
                }
            }

            // Validation spécifique pour l'âge
            if (field.name === 'age' && field.value < 18) {
                isValid = false;
                field.classList.add('border-red-500');
                const errorMsg = field.parentNode.querySelector('.error-message');
                if (!errorMsg) {
                    const msg = document.createElement('p');
                    msg.className = 'error-message text-red-500 text-sm mt-1';
                    msg.textContent = 'Vous devez avoir au moins 18 ans';
                    field.parentNode.appendChild(msg);
                }
            }

            // Validation du format email
            if (field.type === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value)) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    const errorMsg = field.parentNode.querySelector('.error-message');
                    if (!errorMsg) {
                        const msg = document.createElement('p');
                        msg.className = 'error-message text-red-500 text-sm mt-1';
                        msg.textContent = 'Format d\'email invalide';
                        field.parentNode.appendChild(msg);
                    }
                }
            }
        });

        return isValid;
    }

    function updateStepIcon(step) {
        const iconContainer = document.getElementById('step-icon');
        let iconSvg = '';

        switch (step) {
            case 1:
                // Icône équipe
                iconSvg = `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>`;
                break;
            case 2:
                // Icône chef d'équipe
                iconSvg = `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>`;
                break;
            default:
                // Icône membre
                iconSvg = `<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>`;
        }

        iconContainer.innerHTML = iconSvg;
    }

    function updateProgress(step) {
        const progressBar = document.getElementById('progress-bar');
        const progressText = document.getElementById('progress-text');
        const progressPercentage = document.getElementById('progress-percentage');

        const percentage = Math.round((step / totalSteps) * 100);

        // Animation de la barre de progression
        progressBar.style.width = `${percentage}%`;

        // Mise à jour du texte
        progressText.textContent = `Étape ${step} sur ${totalSteps}`;
        progressPercentage.textContent = `${percentage}%`;

        // Changement de couleur en fonction de la progression
        if (percentage === 100) {
            progressBar.classList.remove('from-blue-600', 'to-purple-600');
            progressBar.classList.add('from-green-500', 'to-green-600');
        } else {
            progressBar.classList.remove('from-green-500', 'to-green-600');
            progressBar.classList.add('from-blue-600', 'to-purple-600');
        }
    }

    function showStep(step) {
        document.querySelectorAll('.form-step').forEach(s => s.classList.add('hidden'));
        document.getElementById(`step${step}`).classList.remove('hidden');

        // Mise à jour des indicateurs
        for (let i = 1; i <= totalSteps; i++) {
            const dot = document.getElementById(`step${i}-dot`);
            dot.classList.remove('bg-[#CCFF00]', 'bg-gray-700');
            dot.classList.add(i <= step ? 'bg-[#CCFF00]' : 'bg-gray-700');
        }

        // Gestion des boutons
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');

        prevBtn.classList.toggle('hidden', step === 1);
        nextBtn.classList.toggle('hidden', step === totalSteps);
        submitBtn.classList.toggle('hidden', step !== totalSteps);

        // Mise à jour de l'icône
        updateStepIcon(step);

        // Mise à jour de l'indicateur d'étape
        const stepIndicator = document.querySelector('h3');
        switch (step) {
            case 1:
                stepIndicator.textContent = 'Informations personnelles';
                break;
            case 2:
                stepIndicator.textContent = 'Informations professionnelles';
                break;
            case 3:
                stepIndicator.textContent = 'Documents et validation';
                break;
            case 4:
                stepIndicator.textContent = 'Validation finale';
                break;
        }

        // Mise à jour de la barre de progression
        updateProgress(step);
    }

    // Écouteurs d'événements pour la navigation
    document.getElementById('nextBtn').addEventListener('click', () => {
        if (validateStep(currentStep)) {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        }
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Permettre la navigation par les points indicateurs
    document.querySelectorAll('[id^="step"][id$="-dot"]').forEach((dot, index) => {
        dot.addEventListener('click', () => {
            const targetStep = index + 1;
            if (targetStep < currentStep || validateStep(currentStep)) {
                currentStep = targetStep;
                showStep(currentStep);
            }
        });

        // Ajouter un style de curseur pointer pour indiquer la cliquabilité
        dot.style.cursor = 'pointer';
    });

    document.getElementById('registration-form').addEventListener('submit', (e) => {
        e.preventDefault();
        if (validateStep(currentStep)) {
            // Ajoutez ici la logique de soumission du formulaire
            console.log('Formulaire soumis avec succès');
        }
    });

    // Initialisation du formulaire
    showStep(1);

    // Ajout des écouteurs d'événements pour nettoyer les messages d'erreur lors de la saisie
    document.querySelectorAll('input, select').forEach(field => {
        field.addEventListener('input', () => {
            field.classList.remove('border-red-500');
            const errorMsg = field.parentNode.querySelector('.error-message');
            if (errorMsg) {
                errorMsg.remove();
            }
        });
    });

    // Ajout d'une animation pour la barre de progression
    document.getElementById('progress-bar').style.transition = 'width 0.5s ease-in-out, background-color 0.5s ease-in-out';

    function openCguModal() {
        document.getElementById('cguModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeCguModal() {
        document.getElementById('cguModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Modifier le lien des conditions d'utilisation
    document.querySelector('a[href="#"]').addEventListener('click', function(e) {
        e.preventDefault();
        openCguModal();
    });

    // Fermer le modal en cliquant en dehors
    document.getElementById('cguModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeCguModal();
        }
    });

    // Fermer avec la touche Echap
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !document.getElementById('cguModal').classList.contains('hidden')) {
            closeCguModal();
        }
    });

    // Ajouter cette fonction pour la prévisualisation des images
    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId).querySelector('img');
        const container = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.classList.add('hidden');
        }
    }

    // Ajout d'un message d'information sur la composition de l'équipe
    function showTeamCompositionInfo() {
        Swal.fire({
            title: 'Composition de l\'équipe requise',
            html: `<div class="text-left">
                <p class="mb-3">Votre équipe doit être composée de 4 membres au total (chef d'équipe inclus) avec la répartition suivante :</p>
                <ul class="list-disc pl-5">
                    <li>2 développeurs</li>
                    <li>1 technicien réseau</li>
                    <li>1 marketeur</li>
                </ul>
                <p class="mt-3">Assurez-vous que les profils sélectionnés respectent cette composition.</p>
            </div>`,
            icon: 'info',
            confirmButtonText: 'Compris',
            confirmButtonColor: '#3085d6'
        });
    }

    // Afficher l'information dès qu'on arrive à l'étape 2
    document.getElementById('nextBtn').addEventListener('click', () => {
        if (currentStep === 1 && validateStep(currentStep)) {
            showTeamCompositionInfo();
        }
    });

    // Modification de la fonction de validation
    function validateTeamComposition() {
        let developers = 0;
        let networkTechs = 0;
        let marketers = 0;

        // Vérification du chef d'équipe
        const chefRole = document.querySelector('select[name="chef_role"]').value;
        if (chefRole === 'developpeur') developers++;
        else if (chefRole === 'technicien_reseau') networkTechs++;
        else if (chefRole === 'marketeur') marketers++;

        // Vérification des membres (seulement les 3 autres membres)
        for (let i = 1; i <= 3; i++) {
            const memberRole = document.querySelector(`select[name="membre${i}_role"]`).value;
            if (memberRole === 'developpeur') developers++;
            else if (memberRole === 'technicien_reseau') networkTechs++;
            else if (memberRole === 'marketeur') marketers++;
        }

        // Vérification de la composition
        if (developers !== 2 || networkTechs !== 1 || marketers !== 1) {
            Swal.fire({
                title: 'Composition d\'équipe invalide!',
                html: `<div class="text-left">
                    <p class="mb-3">Votre équipe (chef inclus) doit être composée exactement de :</p>
                    <ul class="list-disc pl-5 mb-3">
                        <li>2 développeurs (actuellement: ${developers})</li>
                        <li>1 technicien réseau (actuellement: ${networkTechs})</li>
                        <li>1 marketeur (actuellement: ${marketers})</li>
                    </ul>
                    <p class="text-red-500">Veuillez ajuster les profils pour respecter cette composition.</p>
                </div>`,
                icon: 'error',
                confirmButtonText: 'Corriger',
                confirmButtonColor: '#3085d6'
            });
            return false;
        }
        return true;
    }

    // Ajout de la vérification lors du changement de profil
    function updateTeamComposition() {
        let developers = 0;
        let networkTechs = 0;
        let marketers = 0;

        // Compte du chef d'équipe
        const chefRole = document.querySelector('select[name="chef_role"]').value;
        if (chefRole) {
            if (chefRole === 'developpeur') developers++;
            else if (chefRole === 'technicien_reseau') networkTechs++;
            else if (chefRole === 'marketeur') marketers++;
        }

        // Compte des membres
        for (let i = 1; i <= 3; i++) {
            const memberRole = document.querySelector(`select[name="membre${i}_role"]`);
            if (memberRole && memberRole.value) {
                if (memberRole.value === 'developpeur') developers++;
                else if (memberRole.value === 'technicien_reseau') networkTechs++;
                else if (memberRole.value === 'marketeur') marketers++;
            }
        }

        // Affichage du statut actuel
        const remainingDev = 2 - developers;
        const remainingNet = 1 - networkTechs;
        const remainingMkt = 1 - marketers;

        // Mise à jour du message de statut
        const statusMessage = `
            Profils restants à sélectionner :
            ${remainingDev > 0 ? `\n- ${remainingDev} développeur(s)` : ''}
            ${remainingNet > 0 ? `\n- ${remainingNet} technicien réseau` : ''}
            ${remainingMkt > 0 ? `\n- ${remainingMkt} marketeur` : ''}
            ${(remainingDev <= 0 && remainingNet <= 0 && remainingMkt <= 0) ? '\nComposition complète !' : ''}
        `;

        // Afficher le statut dans une petite notification
        if (document.querySelector('select[name="chef_role"]').value ||
            document.querySelector('select[name="membre1_role"]').value) {
            Swal.fire({
                title: 'Statut de la composition',
                text: statusMessage,
                icon: 'info',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        }
    }

    // Ajout des écouteurs d'événements pour les sélecteurs de profil
    document.querySelectorAll('select[name$="_role"]').forEach(select => {
        select.addEventListener('change', updateTeamComposition);
    });

    function submitForm() {
        const form = document.getElementById('registration-form');
        const formData = new FormData(form);

        // Afficher l'indicateur de chargement
        Swal.fire({
            title: 'Envoi en cours...',
            html: 'Veuillez patienter pendant le traitement de votre inscription',
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => {
                Swal.showLoading();
            }
        });

        // Envoi des données via AJAX
        $.ajax({
            url: 'traitement.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.close();

                if (response.success) {
                    Swal.fire({
                        title: 'Succès!',
                        text: 'Votre équipe a été inscrite avec succès!',
                        icon: 'success',
                        confirmButtonColor: '#28a745'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = response.redirect;
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Erreur!',
                        text: response.error || 'Une erreur est survenue',
                        icon: 'error',
                        confirmButtonColor: '#dc3545'
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.close();
                Swal.fire({
                    title: 'Erreur technique',
                    text: 'Une erreur est survenue lors de l\'envoi du formulaire. Veuillez réessayer.',
                    icon: 'error',
                    confirmButtonColor: '#dc3545'
                });
            }
        });
    }

    // Permettre la soumission avec la touche Entrée
    document.getElementById('registration-form').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            submitForm();
        }
    });
</script>

<style>
    /* Animation pour les transitions d'icônes */
    #step-icon svg {
        transition: all 0.3s ease-in-out;
    }

    /* Animation pour les boutons */
    button {
        transition: all 0.3s ease-in-out;
    }

    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* Animation pour la barre de progression */
    #progress-bar {
        transition: width 0.5s ease-in-out, background-color 0.5s ease-in-out;
    }

    /* Animation du texte de progression */
    #progress-text,
    #progress-percentage {
        transition: all 0.3s ease-in-out;
    }

    /* Effet de brillance sur la barre de progression */
    @keyframes shine {
        0% {
            background-position: 200% center;
        }

        100% {
            background-position: -200% center;
        }
    }

    #progress-bar {
        background-size: 200% auto;
        animation: shine 3s linear infinite;
        background-image: linear-gradient(270deg,
                rgba(255, 255, 255, 0.1) 25%,
                rgba(255, 255, 255, 0.2) 50%,
                rgba(255, 255, 255, 0.1) 75%);
    }

    /* Effet hover sur la barre de progression */
    .progress-container:hover #progress-bar {
        filter: brightness(1.1);
    }

    /* Styles pour la scrollbar personnalisée dans le modal */
    .modal-content::-webkit-scrollbar {
        width: 8px;
    }

    .modal-content::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
    }

    .modal-content::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 4px;
    }

    .modal-content::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    /* Animation d'entrée du modal */
    @keyframes modalFadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .modal-content {
        animation: modalFadeIn 0.3s ease-out;
    }
</style>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>