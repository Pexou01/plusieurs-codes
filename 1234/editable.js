        function editable() {
            targetElement = this;
            targetElement.addEventListener("click", startEdit);

            //Gestion de l'édition d'un paragraphe
            function startEdit(event) {
                var element = event.target;
                var elementText = element.innerHTML;
                var parent = element.parentNode;

                elementText = elementText.split("<br>").join("\n");

                //Création de la zone de texte
                var textArea = document.createElement("textarea");
                textArea.textContent = elementText;
                textArea.setAttribute("rows", 20);
                textArea.setAttribute("cols", 30);

                textArea.addEventListener("blur", endEdit);

                parent.replaceChild(textArea, element);
                textArea.focus();
                textArea.select();
            }

            function endEdit(event) {
                var element = event.target;
                var elementText = element.value;
                var parent = element.parentNode;

                elementText = elementText.split("\n").join("<br>");

                var para = document.createElement("p");
                para.innerHTML = elementText;

                para.addEventListener("click", startEdit);

                parent.replaceChild(para, element);
            }

        }

        HTMLElement.prototype.editable = editable;