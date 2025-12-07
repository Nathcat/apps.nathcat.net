<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Mind Your Mana</title>
  <link rel="shortcut icon" href="TemplateData/favicon.ico">
  <link rel="stylesheet" href="TemplateData/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://nathcat.net/static/css/new-common.css">
</head>

<body>
  <div class="content">
    <?php include("header.php"); ?>

    <div class="main align-center">
      <div class="row align-center justify-center">
        <div class="content-card">
          <h1>External links</h1>
          <ul>
            <li><a href="https://devpost.com/software/mind-over-mana">Devpost</a></li>
            <li><a href="https://github.com/Nathcat/HackSussex-GameJam-2025">GitHub</a></li>
            <ul>
        </div>

        <div class="content-card">
          <h1>Available as</h1>
          <ul>
            <li><a href="WebGL">WebGL</a></li>
            <li><a href="https://github.com/Nathcat/HackSussex-GameJam-2025/">Windows</a></li>
          <ul>
        </div>
      </div>

      <div class="content-card">
        <h1>Mind Your Mana</h1>

        <h2>Inspiration</h2>
        <p>
          Mind Your Mana's general style was inspired by several top-down dungeon crawlers, with the artstyle influenced by games such as A Link to the Past. The specific idea of drawing sigils to cast different spells came from both the <a href="https://modrinth.com/mod/hex-casting/versions">Minecraft Hex Casting Mod</a>, as well as the 2016 Google Doodle Halloween game. 
        </p>
          
        <h2>What it does</h2>
        <p>
          Mind Your Mana is primarily about utilising specific spells to clear sections of a dungeon, by drawing the correct sigils on a hexagonal grid using the mouse. To clear an area, the player must defeat all the enemies in the area, then use the sigil shown on the exit door to cast the correct spell, which opens the door and allows them to progress. 
        </p>
        <p>
          There are four spells used - a bolt spell, an explosion spell, a healing spell, and a teleport spell. Each spell consumes mana, which regenerates over time. The explosion and healing spell are 'area of effect' spells - the explosion can deal damage to both the player and any enemies in the blast range, and the healing spell can heal both enemies and the player. The bolt spell is a ranged attack, which deals significant damage should it make contact with an enemy. Finally, the teleport spell can be used to move the player between areas, but it consumes the most amount of mana, and requires that the player be in a location which they can teleport in, such areas are marked by a glowing blue / white ring.
        </p>

        <h2>How we built it</h2>

        <p>
          One of our stretch goals which we did not have time to achieve was allowing for multiplayer. While we did not achieve this goal, this approach lead us to design a very modular game, which is well suited for a multiplayer implementation in the future.
        </p>
        <p>
          Enemy navigation was especially aided by the use of a small library named NavMeshPlus, which provides some convenience Unity convenience functions for generating navigation meshes from tilemaps. Everything else however, was of our own creation.
        </p>
        <p>
          The sigil drawing system uses some relatively simple mathematics and line rendering to draw a path, which is reduced down to a sequence of integers. This sequence of integers is then used to determine the spell which was intended.
        </p>
        <p>
          The enemies make use of an MMORPG style enmity system, implemented as part of our multiplayer ambitions.
        </p>
        <p>
          A large chunk of the internal communication between components of the application are through Unity events. This architecture allowed us to create the very modular program we ended up with.
        </p>

        <h2>Challenges we ran into</h2>
        <p>
          The main challenges we faced were with setting up the spellcasting system, as well as the shaders and other effects used in the spellcasting. Luckily, these issues were overcome, which allowed us to continue with completing the game.
        </p>
        <p>
          The creation of the navigation meshes was also a challenge, as none of us have had much experience with that in the past!
        </p>

        <h2>Accomplishments that we're proud of</h2>
        <ul>
          <li>We learned new skills in developing with navigation meshes.</li>
          <li>We managed to develop what we think is a very well-rounded game, with good visuals, considering the time allocated to us.</li>
          <li>Managing to keep our development processes in check, so that we could even consider attempting our stretch goals.</li>
        </ul>

        <h2>What we learned</h2>
        <p>
          We learned more about how to function effectively as a team, and manage difficult problems and situations. We were able to ensure we developed our code base in the correct way to keep it clean and maintainable.
        </p>
        <p>
          We also learned a number of new skills in the Unity Game Engine, such as navigation meshes, tilemapping, and more advanced particle effects.
        </p>

        <h2>What's next for Mind Your Mana</h2>
        <p>
          As mentioned, one of our stretch goals was to implement multiplayer. With the code base we have developed, this should not be too difficult to implement in the future.
        </p>
        <p>
          We also have a few ideas for more spells, such as a spell which allows you to swap positions with an enemy.
        </p>
      </div>
    </div>

    <?php include("../footer.php"); ?>
  </div>
</body>

</html>
