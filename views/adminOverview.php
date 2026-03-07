<?php require_once __DIR__ . '/adminHeader.php'; ?>
  <h1>Alle Producten</h1>
  <input type="submit" value="Nieuw Product aanmaken" class="saveBtn newBtn" />
  <div id="search">
    <input type="text" placeholder="Typ de productnaam in." class="searchbar">
    <input type="Submit" value="Zoeken" class="saveBtn" />
  </div>

  <table>
    <thead>
      <th class="tableName">Naam</th>
      <th class="tablePrice">Prijs</th>
      <th class="tableSupplier">Leverancier</th>
      <th class="tableWeight">Gewicht</th>
      <th class="tableDescription">Omschrijving</th>
      <th class="tableLink"></th>
    </thead>
    <tbody>
      <tr>
        <td>Naam hier</td>
        <td>Prijs hier</td>
        <td>Leverancier hier</td>
        <td>Gewicht</td>
        <td>Omschrijving hier</td>
        <td><input value=">>" type="submit" class="saveBtn toProductBtn" /></td>
      </tr>
      <tr>
        <td>Naam hier</td>
        <td>Prijs hier</td>
        <td>Leverancier hier</td>
        <td>Gewicht</td>
        <td>Omschrijving hier</td>
        <td><input value=">>" type="submit" class="saveBtn toProductBtn" /></td>
      </tr>
    </tbody>
  </table>
</main>
</body>
</html>