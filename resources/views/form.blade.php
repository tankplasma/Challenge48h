<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body>

<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">Formulaire</h1>
  </header>
  <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Inserez votre image</label>
            <input type="file" name="file">
          </div>
          <hr>
  <form id="survey-form">
    <div class="form-group">
      <label id="name-label" for="name">Nom</label>
      <input
        type="text"
        name="name"
        id="name"
        class="form-control"
        placeholder="Enter the name"
        required
      />
    </div>
    <div class="form-group">
      <label id="email-label" for="email">Tags (séparé d'un espace)</label>
      <input
        type="text"
        name="email"
        id="email"
        class="form-control"

      />
    </div>
 

      <label
        ><input
          name="prefer"
          value="front-end-projects"
          type="checkbox"
          class="input-checkbox"
        />L'image contient-elle un produit ?</label
      >
      <label>
        <input
          name="prefer"
          value="back-end-projects"
          type="checkbox"
          class="input-checkbox"
        />L'image contient-elle un humain ?</label
      >
      <label
        ><input
          name="prefer"
          value="data-visualization"
          type="checkbox"
          class="input-checkbox"
        />L'image est institutionnelle ?</label
      >
      <label
        ><input
          name="prefer"
          value="challenges"
          type="checkbox"
          class="input-checkbox"
        />L'image est vertical ?</label>
    
    <div class="form-group">
      <p>Description</p>
      <textarea
        id="comments"
        class="input-textarea"
        name="comment"
        placeholder="Enter your comment here..."
      ></textarea>
    </div>

<div>
<label
        ><input
          name="prefer"
          value="front-end-projects"
          type="checkbox"
          class="input-checkbox"
        />L'image est-elle copyrighté ?</label
      >
</div>
<div class="form-group">
      <button type="submit" id="submit" class="submit-button">
        Submit
      </button>
    </div>
  </form>
</div>
</body>
</html>