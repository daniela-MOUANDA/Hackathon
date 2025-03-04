<div class="mb-6 sm:mb-8">

    <div class="swiper challengeSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <?php
                    // require_once __DIR__ . '/../bdd.php';
                    require_once __DIR__ . '/../nbrequipe.php';
                    $nbEquipes = getNombreEquipes($pdo);
                    $nbParticipants = getNombreParticipants($pdo);
                    ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Card Nombre d'équipes -->
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg p-6 text-white shadow-lg hover:transform hover:scale-105 transition-transform duration-300">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Nombre d'Équipes</h3>
                                    <p class="text-4xl font-bold"><?php echo $nbEquipes; ?></p>
                                </div>
                                <div class="text-4xl opacity-80">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Card Nombre de participants -->
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg p-6 text-white shadow-lg hover:transform hover:scale-105 transition-transform duration-300">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Nombre de Participants</h3>
                                    <p class="text-4xl font-bold"><?php echo $nbParticipants; ?></p>
                                </div>
                                <div class="text-4xl opacity-80">
                                    <i class="fas fa-user-friends"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Liste des équipes -->
                    <div class="mt-8">
                        <h2 class="text-2xl font-bold mb-6">Liste des Équipes</h2>

                        <div class="overflow-x-auto bg-white rounded-lg shadow max-w-full">
                            <table id="equipesTable" class="min-w-full table-auto w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 sm:px-6 py-3 text-left text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider">Nom de l'équipe</th>
                                        <th class="px-4 sm:px-6 py-3 text-left text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Description</th>
                                        <th class="px-4 sm:px-6 py-3 text-left text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php
                                    $sql = "SELECT * FROM equipes";
                                    $stmt = $pdo->query($sql);
                                    while ($equipe = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 sm:px-6 py-4">
                                                <div class="text-xs sm:text-sm font-medium text-gray-900">
                                                    <?php echo htmlspecialchars($equipe['nom_equipe']); ?>
                                                </div>
                                                <!-- Description mobile -->
                                                <div class="text-xs text-gray-500 mt-1 md:hidden">
                                                    <?php echo htmlspecialchars($equipe['description_equipe']); ?>
                                                </div>
                                            </td>
                                            <td class="px-4 sm:px-6 py-4 hidden md:table-cell">
                                                <div class="text-xs sm:text-sm text-gray-500">
                                                    <?php echo htmlspecialchars($equipe['description_equipe']); ?>
                                                </div>
                                            </td>
                                            <td class="px-4 sm:px-6 py-4">
                                                <a href="https://innovationdays-inptic.com/ad/views/equipe_details.php?id=<?php echo $equipe['id']; ?>"
                                                    class="inline-block bg-blue-500 text-white px-3 sm:px-4 py-1 sm:py-2 text-xs sm:text-sm rounded hover:bg-blue-600 transition-colors">
                                                    Voir l'équipe
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Autres défis... -->
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Ajoutez ces liens dans la section head de votre document -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">

<!-- Ajoutez ces scripts à la fin de votre document, juste avant la fermeture de body -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

<!-- Styles personnalisés pour DataTables -->
<style>
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_processing,
    .dataTables_wrapper .dataTables_paginate {
        margin: 1rem;
        font-size: 0.875rem;
    }

    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #e2e8f0;
        border-radius: 0.375rem;
        padding: 0.5rem;
        margin-left: 0.5rem;
    }

    .dataTables_wrapper .dataTables_length select {
        border: 1px solid #e2e8f0;
        border-radius: 0.375rem;
        padding: 0.25rem 2rem 0.25rem 0.5rem;
        margin: 0 0.5rem;
    }

    @media (max-width: 640px) {

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            float: none;
            text-align: center;
        }

        .dataTables_wrapper .dataTables_filter {
            margin-top: 0.5rem;
        }

        .dataTables_wrapper .dataTables_filter input {
            margin-left: 0;
            width: 100%;
            max-width: 300px;
        }
    }
</style>

<script>
    $(document).ready(function() {
        $('#equipesTable').DataTable({
            responsive: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
            },
            pageLength: 10,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "Tous"]
            ],
            ordering: true,
            columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                }, // Nom de l'équipe
                {
                    responsivePriority: 3,
                    targets: 1
                }, // Description
                {
                    responsivePriority: 2,
                    targets: 2
                } // Actions
            ],
            dom: '<"flex flex-col sm:flex-row justify-between"lf>rtip'
        });
    });
</script>