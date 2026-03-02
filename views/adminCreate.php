<?php require_once __DIR__ . '/adminHeader.php'; ?>
    <h1>Product Aanmaken</h1>
    <div class="form__group">
      <label class="form__groupLabel" for="naam">Naam:</label>
      <input class="form__groupInput" type="text" id="naam" name="naam" required />
    </div>

    <div class="form__group">
      <label class="form__groupLabel" for="prijs">Prijs:</label>
      <input class="form__groupInput" type="text" id="prijs" name="prijs" required />
    </div>
    
    <div class="form__group">
      <label class="form__groupLabel" for="leverancier">Leverancier:</label>
      <input class="form__groupInput" type="text" id="leverancier" name="leverancier" />
    </div>

    <div class="form__group">
      <label class="form__groupLabel" for="voorraad">Voorraad:</label>
      <input class="form__groupInput" type="text" id="voorraad" name="voorraad" required />
    </div>

    <div class="form__group">
      <label class="form__groupLabel" for="gewicht">Gewicht:</label>
      <input class="form__groupInput" type="text" id="gewicht" name="gewicht" />
    </div>
    
    <div class="form__group">
      <label class="form__groupLabel" for="afbeelding">Afbeelding:</label>
      <input class="form__groupInput" type="file" id="afbeelding" name="afbeelding" />
    </div>

    <div class="form__group">
      <label class="form__groupLabel" for="omschrijving">Omschrijving:</label>
      <textarea id="omschrijving" name="omschrijving" class="form__groupInput" rows="5" required ></textarea>
    </div>

    <input type="submit" value="Opslaan" class="saveBtn"/>
  </main>
</body>
</html>