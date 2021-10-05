<form  action="/thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="number" id="telephone" name="user_phone">   
    </div>
    <div>
        <label for="sujet">Choisir un sujet :</label>
        <select id="sujet" name="sujet">
            <option value="PHP">PHP</option>
            <option value="JS">JS</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div>
    <input type="submit" value="Envoyer votre message" />
    </div>
  </form>