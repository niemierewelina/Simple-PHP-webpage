<h1>Lista użytkowników</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Numer</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
        </tr>
    </thead>
    <tbody>

        <?php
            $txt_file = "include\pages\data\data.txt";
            $lines = file($txt_file);
            if (!empty($lines)) {
                foreach ($lines as $line) {
                    $result = explode(' ',$line);
                    echo '<tr><th scope="row">' . $result[0] . "</th><td>" . $result[1] . "</td><td>" . $result[2] . "</td><td></tr>";
                }
            }
        ?>

    </tbody>
</table>


