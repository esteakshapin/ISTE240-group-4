<div class="command-container">
    <div class="title-section" onclick="expand(this)">
    <span><?php echo $row['command'] ?></span>
    <img src="./assets/media/down-arrow.svg" alt="Down Arrow">
    </div>
    <div class="collapsible-container">
    <div class="collapsible ">
        <p><b>Description:</b> <?php echo $row['description'] ?> </p>
        <p><b>Example:</b> <?php echo $row['example'] ?></p>
    </div>
    </div>
</div>