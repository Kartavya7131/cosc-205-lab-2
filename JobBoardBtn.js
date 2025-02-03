$("#Helper").on("click", ".JobApplyButton", (event) => {
    var self = $(event.currentTarget).parent().parent();

    var id = parseInt((self[0].id).split("Job-")[1]);
    
    //window.location.href = "ApplicationForm.html?jobId=" + id;
    window.location.href = "AddResume.php?jobId=" + id;
});