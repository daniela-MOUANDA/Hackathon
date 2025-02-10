<!-- Section Formulaire avec nouveau style -->
<section id="inscription" class="py-20 px-6 techies-bg">
    <div class="container mx-auto max-w-6xl">
        <div class="grid md:grid-cols-2 gap-0 rounded-3xl overflow-hidden">
            <!-- Colonne de gauche - Info -->
            <div class="bg-gradient-to-br from-blue-600 via-purple-600 to-violet-800 p-12 relative overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-20"></div>
                <div class="relative z-10">
                    <img src="assets/logoinptic.png" alt="Logo" class="w-32 mb-8">
                    <h2 class="text-3xl font-bold mb-6 text-[#CCFF00]">Inscription</h2>
                    <p class="text-lg mb-8 text-white">Rejoignez l'Innovation Days 2025 pour 72 heures de création, d'innovation et de collaboration.</p>

                    <div class="space-y-6 text-white">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-[#CCFF00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>INPTIC, Feu rouge Gros bouquet</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-[#CCFF00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+241 74 72 13 98</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-[#CCFF00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>contact@innovationdays.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne de droite - Formulaire -->
            <div class="bg-black p-12 relative">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black opacity-95"></div>
                <div class="relative z-10">
                    <!-- Barre de progression -->
                    <div class="mb-8">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm text-[#CCFF00]" id="progress-text">Étape 1 sur 6</span>
                            <span class="text-sm text-[#CCFF00]" id="progress-percentage">16%</span>
                        </div>
                        <div class="w-full h-2 bg-gray-700 rounded-full overflow-hidden">
                            <div id="progress-bar" class="h-full bg-gradient-to-r from-blue-600 to-purple-600 transition-all duration-500" style="width: 16%"></div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-8">
                        <div class="flex items-center">
                            <!-- Icône dynamique -->
                            <div id="step-icon" class="mr-4 text-[#CCFF00]">
                                <!-- L'icône sera mise à jour par JavaScript -->
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-[#CCFF00]">Informations personnelles</h3>
                        </div>
                        <div class="flex space-x-4">
                            <div class="w-3 h-3 bg-[#CCFF00] rounded-full" id="step1-dot"></div>
                            <div class="w-3 h-3 bg-gray-700 rounded-full" id="step2-dot"></div>
                            <div class="w-3 h-3 bg-gray-700 rounded-full" id="step3-dot"></div>
                            <div class="w-3 h-3 bg-gray-700 rounded-full" id="step4-dot"></div>
                            <div class="w-3 h-3 bg-gray-700 rounded-full" id="step5-dot"></div>
                            <div class="w-3 h-3 bg-gray-700 rounded-full" id="step6-dot"></div>
                        </div>
                    </div>

                    <form id="registration-form" enctype="multipart/form-data" method="POST">
                        <!-- Étape 1 -->
                        <div class="form-step" id="step1">
                            <div class="form-group">
                                <label class="block text-sm font-medium text-[#CCFF00] mb-2">Nom de l'équipe*</label>
                                <input type="text" name="nom_equipe" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                            </div>

                            <div class="form-group">
                                <label class="block text-sm font-medium text-[#CCFF00] mb-2">Description de l'équipe</label>
                                <textarea name="description_equipe" rows="3" class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all"></textarea>
                            </div>
                        </div>

                        <!-- Étape 2 - Chef d'équipe -->
                        <div class="form-step hidden" id="step2">
                            <h4 class="text-xl font-bold text-[#CCFF00] mb-4">Chef d'équipe</h4>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label class="block text-sm font-medium text-[#CCFF00] mb-2">Nom*</label>
                                    <input type="text" name="chef_nom" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                </div>
                                <div class="form-group">
                                    <label class="block text-sm font-medium text-[#CCFF00] mb-2">Prénom*</label>
                                    <input type="text" name="chef_prenom" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="block text-sm font-medium text-[#CCFF00] mb-2">Email*</label>
                                <input type="email" name="chef_email" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                            </div>
                            <div class="form-group">
                                <label class="block text-sm font-medium text-[#CCFF00] mb-2">Profil*</label>
                                <select name="chef_role" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                    <option value="">Sélectionnez le profil</option>
                                    <option value="developpeur">Développeur</option>
                                    <option value="technicien_reseau">Technicien Réseau</option>
                                    <option value="marketeur">Marketing</option>
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <label class="block text-sm font-medium text-[#CCFF00] mb-2">Photo de profil*</label>
                                <div class="flex items-center space-x-4">
                                    <input type="file" name="chef_photo" accept="image/*" required
                                        class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all"
                                        onchange="previewImage(this, 'chef_photo_preview')">
                                    <div id="chef_photo_preview" class="w-20 h-20 bg-gray-800 rounded-lg overflow-hidden">
                                        <img src="" alt="" class="w-full h-full object-cover hidden">
                                    </div>
                                </div>
                                <p class="text-sm text-gray-400 mt-1">Format: JPG, PNG. Max: 2MB</p>
                            </div>
                        </div>

                        <!-- Étapes 3-5 - Membres -->
                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                            <div class="form-step hidden" id="step<?php echo $i + 2; ?>">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-4">Membre <?php echo $i; ?></h4>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="form-group">
                                        <label class="block text-sm font-medium text-[#CCFF00] mb-2">Nom*</label>
                                        <input type="text" name="membre<?php echo $i; ?>_nom" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                    </div>
                                    <div class="form-group">
                                        <label class="block text-sm font-medium text-[#CCFF00] mb-2">Prénom*</label>
                                        <input type="text" name="membre<?php echo $i; ?>_prenom" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="block text-sm font-medium text-[#CCFF00] mb-2">Email*</label>
                                    <input type="email" name="membre<?php echo $i; ?>_email" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                </div>
                                <div class="form-group">
                                    <label class="block text-sm font-medium text-[#CCFF00] mb-2">Profil*</label>
                                    <select name="membre<?php echo $i; ?>_role" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                        <option value="">Sélectionnez le profil</option>
                                        <option value="developpeur">Développeur</option>
                                        <option value="technicien_reseau">Technicien Réseau</option>
                                        <option value="marketeur">Marketing</option>
                                    </select>
                                </div>
                                <div class="form-group mt-4">
                                    <label class="block text-sm font-medium text-[#CCFF00] mb-2">Photo de profil*</label>
                                    <div class="flex items-center space-x-4">
                                        <input type="file" name="membre<?php echo $i; ?>_photo" accept="image/*" required
                                            class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all"
                                            onchange="previewImage(this, 'membre<?php echo $i; ?>_photo_preview')">
                                        <div id="membre<?php echo $i; ?>_photo_preview" class="w-20 h-20 bg-gray-800 rounded-lg overflow-hidden">
                                            <img src="" alt="" class="w-full h-full object-cover hidden">
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-400 mt-1">Format: JPG, PNG. Max: 2MB</p>
                                </div>
                            </div>
                        <?php endfor; ?>

                        <!-- Étape 6 - Validation finale -->
                        <div class="form-step hidden" id="step6">
                            <h4 class="text-xl font-bold text-[#CCFF00] mb-4">Validation finale</h4>
                            <div class="space-y-4">
                                <div class="form-group">
                                    <label class="block text-sm font-bold text-[#CCFF00] mb-2">Document justificatif de l'équipe*</label>
                                    <input type="file" name="doc_justificatif" accept=".pdf,.doc,.docx" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                    <p class="text-sm text-gray-400 mt-1">Format: PDF, DOC. Max: 5MB</p>
                                </div>

                                <div class="flex items-center space-x-3">
                                    <input type="checkbox" required class="w-5 h-5 border-2 border-gray-700 rounded bg-gray-900 text-[#CCFF00] focus:ring-[#CCFF00] focus:ring-opacity-50">
                                    <label class="text-sm text-gray-300">
                                        J'accepte les <a href="#" class="text-[#CCFF00] hover:underline">conditions d'utilisation</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Boutons de navigation avec nouveau style -->
                        <div class="flex justify-between mt-6">
                            <button type="button" id="prevBtn" class="hidden bg-gradient-to-r from-purple-600 to-blue-600 text-white py-3 px-6 rounded-lg font-bold hover:from-purple-700 hover:to-blue-700 transition-all flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                                Précédent
                            </button>
                            <button type="button" id="nextBtn" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 px-6 rounded-lg font-bold hover:from-blue-700 hover:to-purple-700 transition-all flex items-center">
                                Suivant
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                            <button type="button" id="submitBtn" onclick="submitForm()" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 px-6 rounded-lg font-bold hover:from-blue-700 hover:to-purple-700 transition-all flex items-center">
                                Soumettre
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tech-innov" class="py-20 px-6 bg-black">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <!-- Image à gauche -->
            <div class="md:w-1/2">
                <img src="assets/im1.png" alt="Innovation Days" class="w-full h-auto rounded-lg shadow-2xl transform hover:scale-105 transition-all duration-300">
            </div>

            <!-- Contenu à droite -->
            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold mb-6" style="font-family: 'Orbitron', sans-serif;">
                    <span class="text-white">REJOIGNEZ</span><br>
                    <span class="text-[#0A4DA6] bg-gradient-to-r from-[#0A4DA6] to-[#3B82F6] bg-clip-text text-transparent">INNOVATION DAYS 2025</span>
                </h2>

                <!-- Boîte avec texte -->
                <div class="bg-black border-2 border-[#0A4DA6] rounded-2xl p-6 shadow-lg shadow-[#0A4DA6]/20">
                    <p class="text-white text-lg leading-relaxed">
                        PLONGEZ DANS UNE EXPÉRIENCE UNIQUE DE 72 HEURES OÙ VOUS POURREZ :
                    </p>
                    <ul class="mt-4 space-y-3">
                        <li class="flex items-center text-[#93C5FD]">
                            <span class="mr-2">⚡</span>
                            DÉVELOPPER DES SOLUTIONS INNOVANTES
                        </li>
                        <li class="flex items-center text-[#93C5FD]">
                            <span class="mr-2">🤝</span>
                            COLLABORER AVEC DES TALENTS PASSIONNÉS
                        </li>
                        <li class="flex items-center text-[#93C5FD]">
                            <span class="mr-2">🎯</span>
                            PRÉSENTER VOTRE PROJET AUX EXPERTS
                        </li>
                    </ul>
                </div>

                <!-- Titre et bouton d'action -->
                <div class="mt-12">
                    <h3 class="text-3xl font-bold mb-6 text-white" style="font-family: 'Orbitron', sans-serif;">
                        PRÊT À RELEVER LE DÉFI ?
                    </h3>
                    <button class="bg-gradient-to-r from-[#0A4DA6] to-[#1E3A8A] text-white font-bold py-4 px-8 rounded-lg hover:shadow-lg hover:shadow-[#0A4DA6]/30 transform hover:scale-105 transition-all duration-300">
                        INSCRIVEZ VOTRE ÉQUIPE
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="techies-bg py-20 px-6">
    <div class="container mx-auto">
        <!-- En-tête Calendrier -->
        <div class="bg-[#CCFF00] text-black font-bold py-2 px-6 rounded-lg inline-block mb-8">
            DATES CLÉS
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Dates importantes -->
            <div class="space-y-4">
                <div class="neon-text">
                    <span class="font-bold">Ouverture des inscriptions : </span>
                    15 février 2025
                </div>
                <div class="neon-text">
                    <span class="font-bold">Clôture des inscriptions : </span>
                    23 mars 2025
                </div>
                <div class="neon-text">
                    <span class="font-bold">Hackathon : </span>

                    23-25 mars 2025
                </div>

                <!-- Texte descriptif -->
                <div class="bg-white text-black p-6 rounded-xl mt-8">
                    <p>Vous avez une passion pour l'innovation et la technologie ? Que vous soyez étudiant en informatique, en réseaux, en marketing digital ou passionné de tech, l'Innovation Days 2024 est fait pour vous ! Rejoignez-nous pour 72 heures intenses de création et d'innovation à l'INPTIC.</p>
                </div>

                <!-- Bouton Participer -->
                <button class="bg-[#CCFF00] text-black font-bold py-3 px-8 rounded-lg hover:bg-[#b3ff00] transition-all mt-6">
                    JE M'INSCRIS
                </button>

                <!-- Section pour les participants -->
                <div class="text-white text-center mt-8">
                    <p class="mb-4">Vous êtes étudiant, développeur, technicien réseau<br>
                        ou marketeur digital ? Formez votre équipe de 4 personnes !</p>
                    <p>Profitez d'un accompagnement personnalisé,<br>
                        de mentors experts et de nombreuses récompenses.</p>
                </div>

                <!-- Contact -->
                <div class="mt-8">

                    <div class="bg-[#CCFF00] text-black p-4 rounded-lg">
                        <p>Des questions sur l'événement ? Contactez-nous à contact@innovationdays.com<br>
                            ou suivez-nous sur les réseaux sociaux @INPTIC pour les dernières actualités !</p>
                    </div>
                </div>
            </div>

            <!-- Image à droite -->
            <div class="relative">
                <img src="assets/im3.jpg" alt="Développeur Innovation Days" class="w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Section Support et Mentorat -->
<section id="support" class="py-20 px-6 bg-gray-800">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12">Support & Mentorat</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-black p-6 rounded-lg border border-[#CCFF00]">
                <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Accompagnement Technique</h3>
                <ul class="space-y-3 text-gray-300">
                    <li>✓ Mentors experts en développement</li>
                    <li>✓ Support infrastructure cloud</li>
                    <li>✓ Ressources techniques dédiées</li>
                    <li>✓ Workshops techniques</li>
                </ul>
            </div>
            <div class="bg-black p-6 rounded-lg border border-[#CCFF00]">
                <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Support Business</h3>
                <ul class="space-y-3 text-gray-300">
                    <li>✓ Conseils en business model</li>
                    <li>✓ Stratégie de mise sur le marché</li>
                    <li>✓ Pitch coaching</li>
                    <li>✓ Networking avec des experts</li>
                </ul>
            </div>
            <div class="bg-black p-6 rounded-lg border border-[#CCFF00]">
                <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Suivi Post-Hackathon</h3>
                <ul class="space-y-3 text-gray-300">
                    <li>✓ Accompagnement personnalisé</li>
                    <li>✓ Accès aux investisseurs</li>
                    <li>✓ Programme d'incubation</li>
                    <li>✓ Suivi de progression</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section Processus de Soumission -->
<section id="soumission" class="py-20 px-6">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12">Processus de Soumission</h2>
        <div class="grid md:grid-cols-2 gap-12">
            <div class="space-y-6">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Livrables Requis</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>✅ Prototype fonctionnel</li>
                        <li>📊 Présentation détaillée</li>
                        <li>📝 Documentation technique</li>
                        <li>🔄 Diagrammes et spécifications</li>
                        <li>💻 Code source documenté</li>
                    </ul>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Critères d'Évaluation</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>🎯 Innovation (30%) - Originalité et créativité</li>
                        <li>💡 Utilité (25%) - Impact et pertinence</li>
                        <li>🤝 Collaboration (15%) - Travail d'équipe</li>
                        <li>⚙️ Prototype (10%) - Fonctionnalité</li>
                    </ul>
                </div>
            </div>
            <div class="space-y-6">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Récompenses Détaillées</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-bold text-white">Formation & Mentorat</h4>
                            <ul class="text-gray-300">
                                <li>✨ Programme d'incubation personnalisé</li>
                                <li>✨ Formations techniques avancées</li>
                                <li>✨ Accès VIP aux conférences tech</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Opportunités</h4>
                            <ul class="text-gray-300">
                                <li>🌍 Learning Expeditions internationales</li>
                                <li>📚 Abonnements premium aux plateformes</li>
                                <li>🚀 Accompagnement business sur 6 mois</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Équipement Tech</h4>
                            <ul class="text-gray-300">
                                <li>💻 Ordinateurs dernière génération</li>
                                <li>📱 Tablettes professionnelles</li>
                                <li>⌚ Équipement connecté premium</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Programme -->
<section id="programme" class="py-20 px-6 bg-gray-900">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12 neon-text">Programme</h2>

        <!-- Timeline des 3 jours -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Jour 1 -->
            <div class="bg-black p-8 rounded-xl border border-blue-500 timeline-day">
                <h3 class="text-2xl font-bold text-blue-500 mb-6">Jour 1: Lancement</h3>
                <ul class="space-y-6">
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">08:00</span>
                        <h4 class="text-white font-bold mb-2">Accueil et Inscription</h4>
                        <p class="text-gray-300">Accueil des participants et finalisation des inscriptions</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">09:30</span>
                        <h4 class="text-white font-bold mb-2">Cérémonie d'ouverture</h4>
                        <p class="text-gray-300">Présentation du déroulement, introduction des mentors et des juges</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">11:00</span>
                        <h4 class="text-white font-bold mb-2">Formation des Équipes</h4>
                        <p class="text-gray-300">Constitution des équipes et networking</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">14:00</span>
                        <h4 class="text-white font-bold mb-2">Présentation du Défi</h4>
                        <p class="text-gray-300">Annonce de la thématique et des objectifs</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">15:00</span>
                        <h4 class="text-white font-bold mb-2">Début du Hackathon</h4>
                        <p class="text-gray-300">Lancement officiel des travaux</p>
                    </li>
                </ul>
            </div>

            <!-- Jour 2 -->
            <div class="bg-black p-8 rounded-xl border border-blue-500 timeline-day">
                <h3 class="text-2xl font-bold text-blue-500 mb-6">Jour 2: Développement</h3>
                <ul class="space-y-6">
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">09:00</span>
                        <h4 class="text-white font-bold mb-2">Sessions de Mentorat</h4>
                        <p class="text-gray-300">Accompagnement personnalisé par des experts</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">11:00</span>
                        <h4 class="text-white font-bold mb-2">Ateliers Techniques</h4>
                        <p class="text-gray-300">Formation sur les APIs, UX/UI et bonnes pratiques</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">14:00</span>
                        <h4 class="text-white font-bold mb-2">Check-in avec les Juges</h4>
                        <p class="text-gray-300">Feedback intermédiaire sur les projets</p>
                    </li>
                </ul>
            </div>

            <!-- Jour 3 -->
            <div class="bg-black p-8 rounded-xl border border-blue-500 timeline-day">
                <h3 class="text-2xl font-bold text-blue-500 mb-6">Jour 3: Finalisation</h3>
                <ul class="space-y-6">
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">09:00</span>
                        <h4 class="text-white font-bold mb-2">Finalisation des Projets</h4>
                        <p class="text-gray-300">Dernières touches aux prototypes</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">14:00</span>
                        <h4 class="text-white font-bold mb-2">Présentations Finales</h4>
                        <p class="text-gray-300">Pitch des projets devant le jury</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">16:00</span>
                        <h4 class="text-white font-bold mb-2">Délibération du Jury</h4>
                        <p class="text-gray-300">Évaluation selon les critères établis</p>
                    </li>
                    <li class="timeline-item">
                        <span class="text-purple-400 font-bold">17:30</span>
                        <h4 class="text-white font-bold mb-2">Cérémonie de Clôture</h4>
                        <p class="text-gray-300">Annonce des gagnants et remise des prix</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Ajoutez ceci juste avant la fermeture du body -->
<div id="cguModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 overflow-y-auto">
    <div class="min-h-screen px-4 text-center">
        <div class="inline-block align-bottom bg-gray-900 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
            <div class="bg-gray-900 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl leading-6 font-bold text-[#CCFF00]">
                                Conditions Générales d'Utilisation - Innovation Days Hackathon
                            </h3>
                            <button onclick="closeCguModal()" class="text-gray-400 hover:text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="mt-4 space-y-6 text-gray-300 max-h-[70vh] overflow-y-auto pr-4">
                            <!-- Section 1 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">1. Acceptation des Conditions</h4>
                                <p>En participant à l'Innovation Days Hackathon, vous acceptez sans réserve les présentes conditions et vous engagez à respecter le règlement complet disponible sur la plateforme.</p>
                            </div>

                            <!-- Section 2 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">2. Éligibilité</h4>
                                <div class="space-y-4">
                                    <div>
                                        <p class="font-bold mb-2">Participants autorisés :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Étudiants de l'INPTIC et autres établissements supérieurs
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Startups de moins de 3 ans
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Professionnels du digital (18 ans minimum)
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-2">Composition d'équipe :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-blue-400 mr-2">🔹</span>
                                                4 membres obligatoires : 2 développeurs + 1 technicien réseau + 1 marketeur
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-blue-400 mr-2">🔹</span>
                                                Interdiction de changer d'équipe après validation
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 3 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">3. Propriété Intellectuelle</h4>
                                <p class="mb-3">Les participants conservent les droits sur leurs créations</p>
                                <p class="font-bold mb-2">Licence non-exclusive accordée aux organisateurs pour :</p>
                                <ul class="list-none space-y-2">
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">▶️</span>
                                        Promotion de l'événement
                                    </li>
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">▶️</span>
                                        Inclusion dans le rapport d'impact
                                    </li>
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">▶️</span>
                                        Utilisation pédagogique
                                    </li>
                                </ul>
                            </div>

                            <!-- Section 4 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">4. Engagements des Participants</h4>
                                <div class="space-y-4">
                                    <div>
                                        <p class="font-bold mb-2">Avant l'événement :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Complétude du profil avec pièces justificatives
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Validation du formulaire d'inscription sous 72h
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-2">Pendant l'événement :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Respect du code de conduite (non-discrimination, fair-play)
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Soumission avant deadline des prototypes (+ présentation PDF/PPT)
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-2">Post-événement :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Participation à l'enquête de satisfaction
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">✓</span>
                                                Autorisation d'utilisation des données anonymisées
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 5 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">5. Évaluation & Récompenses</h4>
                                <div class="space-y-4">
                                    <div>
                                        <p class="font-bold mb-2">Critères de jugement :</p>
                                        <div class="bg-gray-900 p-3 rounded-lg">
                                            <table class="w-full">
                                                <thead>
                                                    <tr class="text-[#CCFF00]">
                                                        <th class="text-left">Critère</th>
                                                        <th class="text-left">Poids</th>
                                                        <th class="text-left">Détails</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="space-y-2">
                                                    <tr>
                                                        <td>Innovation</td>
                                                        <td>30%</td>
                                                        <td>Originalité/Approche disruptive</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Utilité</td>
                                                        <td>25%</td>
                                                        <td>Résolution concrète de problème</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Présentation</td>
                                                        <td>20%</td>
                                                        <td>Clarté du pitch</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Collaboration</td>
                                                        <td>15%</td>
                                                        <td>Dynamique d'équipe</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prototype</td>
                                                        <td>10%</td>
                                                        <td>Fonctionnalité de base</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-2">Récompenses :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-yellow-400 mr-2">🏆</span>
                                                Programme d'incubation (12 mois)
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-blue-400 mr-2">🎓</span>
                                                Formations certifiantes (AWS, Google Cloud)
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-green-400 mr-2">🌍</span>
                                                Voyage d'étude Silicon Valley
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-purple-400 mr-2">💻</span>
                                                Matériel high-tech (valeur max : 5 000€)
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 6 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">6. Responsabilités</h4>
                                <div class="space-y-4">
                                    <div>
                                        <p class="font-bold mb-2">Organisateurs :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-blue-400 mr-2">▶</span>
                                                Fourniture des espaces et matériel de base
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-blue-400 mr-2">▶</span>
                                                Encadrement technique via mentors certifiés
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-blue-400 mr-2">▶</span>
                                                Restauration (3 repas/jour + collations)
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-bold mb-2">Exclusions de responsabilité :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-red-500 mr-2">❌</span>
                                                Perte/vol de matériel personnel
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-red-500 mr-2">❌</span>
                                                Problèmes techniques indépendants de la volonté des organisateurs
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-red-500 mr-2">❌</span>
                                                Utilisation abusive des récompenses
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 7 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">7. Données Personnelles</h4>
                                <p class="mb-3">Conformément au APDPVP, nous collectons :</p>
                                <div class="space-y-4">
                                    <div>
                                        <p class="font-bold mb-2">Données stockées :</p>
                                        <ul class="list-none space-y-2">
                                            <li class="flex items-center">
                                                <span class="text-orange-400 mr-2">🔸</span>
                                                Identité complète
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-orange-400 mr-2">🔸</span>
                                                Historique des soumissions
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-orange-400 mr-2">🔸</span>
                                                Évaluations des juges
                                            </li>
                                            <li class="flex items-center">
                                                <span class="text-orange-400 mr-2">🔸</span>
                                                Retours d'expérience
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="font-bold">Durée de conservation : 3 ans après l'événement</p>
                                </div>
                            </div>

                            <!-- Section 8 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">8. Sanctions</h4>
                                <p class="mb-3">Toute violation entraîne :</p>
                                <ul class="list-none space-y-2">
                                    <li class="flex items-center">
                                        <span class="text-yellow-400 mr-2">⚠️</span>
                                        Disqualification immédiate
                                    </li>
                                    <li class="flex items-center">
                                        <span class="text-yellow-400 mr-2">⚠️</span>
                                        Radiation de la plateforme
                                    </li>
                                    <li class="flex items-center">
                                        <span class="text-yellow-400 mr-2">⚠️</span>
                                        Poursuites pour fraude avérée
                                    </li>
                                </ul>
                            </div>

                            <!-- Section 9 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">9. Modifications</h4>
                                <p class="mb-3">Les organisateurs se réservent le droit de :</p>
                                <ul class="list-none space-y-2">
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">•</span>
                                        Modifier le programme en cas de force majeure
                                    </li>
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">•</span>
                                        Adapter les récompenses selon disponibilités
                                    </li>
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">•</span>
                                        Mettre à jour ces CGU (notification par email 7 jours avant)
                                    </li>
                                </ul>
                            </div>

                            <!-- Section 10 -->
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <h4 class="text-xl font-bold text-[#CCFF00] mb-3">10. Contact</h4>
                                <ul class="list-none space-y-2">
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">📧</span>
                                        support@innovationdays.dz
                                    </li>
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">📞</span>
                                        (+241) 74 72 13 98
                                    </li>
                                    <li class="flex items-center">
                                        <span class="text-blue-400 mr-2">📍</span>
                                        INPTIC - Feu rouge Gros bouquet, Libreville
                                    </li>
                                </ul>
                            </div>

                            <!-- Note finale -->
                            <div class="bg-gray-900 p-4 rounded-lg border border-[#CCFF00] mt-8">
                                <p class="text-sm italic">Ce document doit être complété par :</p>
                                <ul class="list-none space-y-1 mt-2 text-sm">
                                    <li>• Un règlement intérieur détaillé</li>
                                    <li>• Une charte éthique</li>
                                    <li>• Une politique de confidentialité spécifique</li>
                                    <li>• Des annexes techniques pour les soumissions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="closeCguModal()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-base font-medium text-white hover:from-blue-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    J'ai compris
                </button>
            </div>
        </div>
    </div>
</div>

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

        // Debug des données du formulaire
        for (let pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }

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

        // Obtenir le chemin absolu vers traitement.php
        const currentPath = window.location.pathname;
        const basePath = currentPath.substring(0, currentPath.lastIndexOf('/') + 1);
        
        $.ajax({
            url: basePath + 'traitement.php', // Utilisation du chemin relatif correct
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Réponse reçue:', response);
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
                        html: `Erreur: ${response.error}<br>Détails: ${JSON.stringify(response.details)}`,
                        icon: 'error',
                        confirmButtonColor: '#dc3545'
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Erreur AJAX:', {xhr, status, error});
                Swal.close();
                
                let errorMessage = 'Une erreur est survenue lors de l\'envoi du formulaire.';
                try {
                    const response = JSON.parse(xhr.responseText);
                    if (response.error) {
                        errorMessage = response.error;
                    }
                } catch(e) {
                    console.error('Erreur parsing:', e);
                }
                
                Swal.fire({
                    title: 'Erreur technique',
                    text: errorMessage,
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