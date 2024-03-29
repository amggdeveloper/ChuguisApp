/* Script para el Formulario de Contacto */

(function() {

    "use strict";

    var contactForm = {

        initialized: false,

        initialize: function() {

            if (this.initialized) return;
            this.initialized = true;

            this.build();
            this.events();

        },

        build: function() {

            this.validations();

        },

        events: function() {



        },

        validations: function() {

            var contactform = $("#contact-form"),
                url = contactform.attr("action");

            contactform.validate({
                submitHandler: function(form) {

                    // Estado Cargando
                    var submitButton = $(this.submitButton);
                    submitButton.button("submit");

                    // Ajax para el boton
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            "name": $("#contact-form #name").val(),
                            "email": $("#contact-form #email").val(),
                            "subject": $("#contact-form #subject").val(),
                            "message": $("#contact-form #message").val()
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.response == "success") {

                                $("#contact-alert-success").removeClass("hidden");
                                $("#contact-alert-error").addClass("hidden");

                                // Se resetea el formulario
                                $("#contact-form .form-control")
                                    .val("")
                                    .blur()
                                    .parent()
                                    .removeClass("has-success")
                                    .removeClass("has-error")
                                    .find("label.error")
                                    .remove();

                                if (($("#contact-alert-success").position().top - 80) < $(window).scrollTop()) {
                                    $("html, body").animate({
                                        scrollTop: $("#contact-alert-success").offset().top - 80
                                    }, 300);
                                }

                            } else {

                                $("#contact-alert-error").removeClass("hidden");
                                $("#contact-alert-success").addClass("hidden");

                                if (($("#contact-alert-error").position().top - 80) < $(window).scrollTop()) {
                                    $("html, body").animate({
                                        scrollTop: $("#contact-alert-error").offset().top - 80
                                    }, 300);
                                }

                            }
                        },
                        complete: function() {
                            submitButton.button("reset");
                        }
                    });
                },
                //Requerimientos del formulario
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    subject: {
                        required: true
                    },
                    message: {
                        required: true
                    }
                },
                highlight: function(element) {
                    $(element)
                        .parent()
                        .removeClass("has-success")
                        .addClass("has-error");
                },
                success: function(element) {
                    $(element)
                        .parent()
                        .removeClass("has-error")
                        .addClass("has-success")
                        .find("label.error")
                        .remove();
                }
            });

        }

    };

    contactForm.initialize();

})();