<?php include "../parties/_navbar.php" ?>
<div class="flex justify-center items-center z-0 mt-10 min-h-screen items-center">
    <form action="../actions/Adding.php" method="POST" class="w-[40%]">
        <div class="mb-5">
            <input type="text" id="Holdername" placeholder="Nom du titulaire" name="holdername"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <input type="number" id="Balance" placeholder="Balance" name="acount_balance"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div class="mb-5" onclick="checkType()">
            <select id="types"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="types">
                <option>Account Type</option>
                <option value="Businessaccount">Businessaccount</option>
                <option value="Currentaccount">Currentaccount</option>
                <option value="Savingsaccount">Savingsaccount</option>
            </select>
        </div>
        <div id="form_type" class="mb-5 hidden">
            <input type="number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 />

            <input type="text" id="table"
                class="hidden"
                name="table" />
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyer</button>
    </form>
    <script src="../assets/main.js"></script>
</div>