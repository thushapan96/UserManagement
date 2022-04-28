$("input[type='checkbox']").click(function() {
                var newid = $(this).attr('id')
                if (this.checked) {
                    checkboxes.push($(this).attr('id'));

                    sessionStorage.setItem("checkboxes", JSON.stringify(checkboxes))
                    console.log("checkboxes" + JSON.parse(sessionStorage.getItem("checkboxes")));
                } else {

                    $.each(checkboxes, function(Key, value) {
                        console.log("xgfdgfd")
                        console.log("value" + value)
                        console.log("id" + newid)
                        console.log("ddvdcheckboxesbeforeremove", checkboxes)

                        if (value == newid) {
                            checkboxes.splice(Key, 1);
                            console.log("remove", checkboxes)
                            sessionStorage.setItem("checkboxes", JSON.stringify(checkboxes))

                        }

                    });

                }
            });
            if (sessionStorage.getItem("checkboxes")) {
                var checkboxes = [];

                $.each(JSON.parse(sessionStorage.getItem("checkboxes")), function(Key, value) {
                    console.log("in")
                    console.log("v" + value)
                    checkboxes.push(value);
                    $("#" + value).prop("checked", true);
                });
            } else {
                console.log("out")

                var checkboxes = [];
            }
            if (sessionStorage.getItem("name")) {
                $("#name").val(sessionStorage.getItem("name"));
            }
            if (sessionStorage.getItem("appendhtml")) {
                $("#newRow").html(sessionStorage.getItem("appendhtml"));
            }