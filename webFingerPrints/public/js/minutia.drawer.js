if(minutiaes_c !== undefined && minutiaes_c !== null) {
    var canvas_c = document.getElementById("img-current");
    var canvas_s = document.getElementById("img-system");
    var colors = [];
    // console.log(minutiaes_c);

    initCanvas(minutiaes_c, minutiaes_s, canvas_c, canvas_s);
}

function initCanvas(list_c, list_s, canvas_c, canvas_s){
    var context_c = canvas_c.getContext("2d");
    var context_s = canvas_s.getContext("2d");
    var template, query;

    createImageOnCanvas(canvas_c, context_c, img_c)
    .then((res1) => {
        template = res1;

        createImageOnCanvas(canvas_s, context_s, img_s)
        .then((res2) => {
            query = res2;
            
            // console.log(list_c);
            // console.log(list_s);
            var letters = '0123456789ABCDEF';
            var cont = 0;

            for(id in list_c){
                var color = '#';
                var coincident = list_c[id];
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }

                colors[cont] = color;
                coincident.color = color;
        
                drawMinutia(context_c, coincident, color);
                cont++;
            }
            
            cont = 0;
            for(id in list_s){
                var coincident = list_s[id];
                var color = colors[cont];
                coincident.color = color;
        
                drawMinutia(context_s, coincident, color);
                cont++;
            }
        })
        .catch((err) => {
            console.log(err);
            alert("No es posible cargar la imagen de la consulta. Intente nuevamente más tarde.");
        })
    })
    .catch((err) => {
        console.log(err);
        alert("No es posible cargar la imagen de la plantilla. Intente nuevamente más tarde.");
    });
}


// Sets the background image of the canvas
function createImageOnCanvas(canvas, context, imgSource) {
    return new Promise((resolve, reject) => {
        var img = new Image();
        img.src = "http://127.0.0.1:8000/" + imgSource;
        var res;
        img.onload = () => {
            canvas.width = img.width;
            canvas.height = img.height;
            context.drawImage(img, (0), (0));
            context.save();
            resolve();
        };

        img.onerror = (err) => {
            reject(err);
        };
    });
}

function drawMinutia(context, minutia, color) {
    context.fillStyle = color;
    context.strokeStyle = color;

    drawArc(context, minutia.x, minutia.y);
    drawLine(context, minutia.x, minutia.y, 40, minutia.angle); 
}

// Draws an arc centered in the specified coordinate
function drawArc(context, x, y) {
    context.beginPath();
    context.arc(x, y, 20, 0, 2*Math.PI);
    context.lineWidth = 7;
    context.stroke();
}

// Creates array of colors and access to it
// function getRandomColor(continue, index) {
//     if(continue == 1){
//         var letters = '0123456789ABCDEF';
//         var color = '#';
//         for (var i = 0; i < 6; i++) {
//             color += letters[Math.floor(Math.random() * 16)];
//         }
//         colors.push(color);

//         return color;
//     }

//     return colors[index];
// }

// Draw the line from the origin point to the destiny point with the given radius
function drawLine(context, x, y, r, angle) {
    context.beginPath();
    context.moveTo(x, y);
    context.lineTo(x + r*Math.cos(angle), y + r*Math.sin(angle));
    context.stroke();
}

