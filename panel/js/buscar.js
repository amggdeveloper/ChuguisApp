 //Programación en JavaScript llamando al DOM para implementar el subrayado de las palabras
 //a buscar
 window.addEventListener("DOMContentLoaded", function(e) {
     //Creamos una variable con el método hilight creado.El cual buscará el texto en la
     //página activa
     document.getElementById('cerrarBusqueda'), addEventListener('click', limpiar);
     var highligh = new Hilight("container");
     highligh.setMatchType("left");
     document.getElementById("buscarTexto").addEventListener("keyup", function(e) {
         highligh.apply(this.value);
     }, false);
 }, false);

 //Función que borra el campo de busqueda cuando pulsamos cerrar
 function limpiar() {
     document.getElementById('buscarTexto').value = '';
 }
 //Método para hacer el subrayado de las palabras iguales a las escritas en el cuadro
 //de texto del buscador
 function Hilight(id, tag) {

     //Variables privadas
     var targetNode = document.getElementById(id) || document.body;
     var hiliteTag = tag || "MARK";
     var skipTags = new RegExp("^(?:" + hiliteTag + "|SCRIPT|FORM|SPAN)$");
     var colors = ["#ff6", "#a0ffff", "#9f9", "#f99", "#f6f"];
     var wordColor = [];
     var colorIdx = 0;
     var matchRegExp = "";
     var openLeft = false;
     var openRight = false;

     //Caracteres para eliminar del inicio y el final de la cadena de entrada
     var endRegExp = new RegExp('^[^\\w]+|[^\\w]+$', "g");

     //Caracteres utilizados para dividir la cadena de entrada en palabras
     var breakRegExp = new RegExp('[^\\w\'-]+', "g");

     this.setEndRegExp = function(regex) {
         endRegExp = regex;
         return endRegExp;
     };

     this.setBreakRegExp = function(regex) {
         breakRegExp = regex;
         return breakRegExp;
     };

     this.setMatchType = function(type) {
         switch (type) {
             case "left":
                 this.openLeft = false;
                 this.openRight = true;
                 break;

             case "right":
                 this.openLeft = true;
                 this.openRight = false;
                 break;

             case "open":
                 this.openLeft = this.openRight = true;
                 break;

             default:
                 this.openLeft = this.openRight = false;

         }
     };

     this.setRegex = function(input) {
         input = input.replace(endRegExp, "");
         input = input.replace(breakRegExp, "|");
         input = input.replace(/^\||\|$/g, "");
         if (input) {
             var re = "(" + input + ")";
             if (!this.openLeft) {
                 re = "\\b" + re;
             }
             if (!this.openRight) {
                 re = re + "\\b";
             }
             matchRegExp = new RegExp(re, "i");
             return matchRegExp;
         }
         return false;
     };

     this.getRegex = function() {
         var retval = matchRegExp.toString();
         retval = retval.replace(/(^\/(\\b)?|\(|\)|(\\b)?\/i$)/g, "");
         retval = retval.replace(/\|/g, " ");
         return retval;
     };

     //Aplicar recursivamente el resaltado de palabras
     this.hiliteWords = function(node) {
         if (node === undefined || !node) return;
         if (!matchRegExp) return;
         if (skipTags.test(node.nodeName)) return;

         if (node.hasChildNodes()) {
             for (var i = 0; i < node.childNodes.length; i++)
                 this.hiliteWords(node.childNodes[i]);
         }
         if (node.nodeType == 3) {
             if ((nv = node.nodeValue) && (regs = matchRegExp.exec(nv))) {
                 if (!wordColor[regs[0].toLowerCase()]) {
                     wordColor[regs[0].toLowerCase()] = colors[colorIdx++ % colors.length];
                 }

                 var match = document.createElement(hiliteTag);
                 match.appendChild(document.createTextNode(regs[0]));
                 match.style.backgroundColor = wordColor[regs[0].toLowerCase()];
                 match.style.color = "#000";

                 var after = node.splitText(regs.index);
                 after.nodeValue = after.nodeValue.substring(regs[0].length);
                 node.parentNode.insertBefore(match, after);
             }
         };
     };

     //Eliminar el subrayado
     this.remove = function() {
         var arr = document.getElementsByTagName(hiliteTag);
         while (arr.length && (el = arr[0])) {
             var parent = el.parentNode;
             parent.replaceChild(el.firstChild, el);
             parent.normalize();
         }
     };

     //Comenzar a resaltar en el nodo de destino
     this.apply = function(input) {
         this.remove();
         if (input === undefined || !(input = input.replace(/(^\s+|\s+$)/g, ""))) {
             return;
         }
         if (this.setRegex(input)) {
             this.hiliteWords(targetNode);
         }
         return matchRegExp;
     };
 }