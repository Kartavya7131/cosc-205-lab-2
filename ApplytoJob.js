$("#Helper").on("click", ".JobApplyButton", (event) => {
    var self = $(event.currentTarget).parent().parent();

    var jobID = parseInt((self[0].id).split("Job-")[1]);
    
    $.post("ApplicationHandler.php", {id: jobID}, response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
    }, "json");
});