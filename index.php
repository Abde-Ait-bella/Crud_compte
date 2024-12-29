<?php
include_once "./actions/reading.php";

// foreach ($result as $key) {
//     print_r($key) . "<   br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include_once "./parties/_navbar.php" ?>

    <div class="flex justify-end w-full p-5">
        <a href="./view/createAccount.php"
            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Ajouter
            un compte</a>
    </div>

    <div class="listAccount px-[27px]">
        <div class="flex flex-col content-center">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full py-2">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                            <thead
                                class="border-b border-neutral-200 bg-white font-medium dark:border-white/10 dark:bg-body-dark">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Numéro</th>
                                    <th scope="col" class="px-6 py-4">Nom</th>
                                    <th scope="col" class="px-6 py-4">Type de compte</th>
                                    <th scope="col" class="px-6 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $res) { ?>
                                    <tr class="border-b border-neutral-200 bg-black/[0.02] dark:border-white/10">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium"><?= $res['number_account'] ?>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4"><?= $res['holdername'] ?></td>
                                        <td class="whitespace-nowrap px-6 py-4"><?= $res['account_type'] ? $res['account_type'] : "--" ?></td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <a type="button" href="<?= './actions/editeAccount.php?id='.$res['number_account'] ?>"
                                                class="inline-block pointer rounded bg-danger px-5 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out bg-black hover:shadow-danger-2 focus:bg-danger-accent-300 focus:shadow-danger-2 focus:outline-none focus:ring-0 active:bg-danger-600 active:shadow-danger-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                                                Modifier
                                            </a>
                                            <a type="button" href="<?= './actions/Deleting.php?id='.$res['number_account'] ?>"
                                                class="inline-block pointer rounded bg-black px-5 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-warning-3 transition duration-150 ease-in-out hover:bg-warning-accent-300 hover:shadow-warning-2 focus:bg-warning-accent-300 focus:shadow-warning-2 focus:outline-none focus:ring-0 active:bg-warning-600 active:shadow-warning-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                                                Supprimer
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
    </div>
    <script src="./assets/main.js"></script>
</body>

</html>