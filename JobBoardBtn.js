$("#Helper").on("click", ".JobApplyButton", (event) => {
    var self = $(event.currentTarget).parent().parent();

    var id = parseInt((self[0].id).split("Job-")[1]);
    console.log(id);
});

$("#LoginButton").on('click', () => {

});

$("#CreatePostButton").on('click', () => {

});