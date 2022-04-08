(function displayJob(){
    console.log("test");  
    for(var i =1; i<= 1; i++){
        $('#target').append($('<section/>', { 'class' : 'job-section'}
            .append($('<div/>', { 'class' : 'job'}
                .append($('<div/>', { 'class' : 'job-title'}, 'Job Title'
                ))))));

      }
});

  