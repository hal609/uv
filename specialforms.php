<?php
function enform($username)
{
    echo "<div class=\"form-group\">
        <form id=\"upload\" method=\"post\" enctype=\"multipart/form-data\" action=\"https://en.wikipedia.org/w/index.php?title=Wikipedia:Changing_username/Simple&action=edit&section=new&nosummary=1&dtenable=0\" style=\"display:inline\">
        <h1>Benutzername &auml;ndern</h1>
        <p class=\"bg-info\">Achte darauf, dass du mit deinem aktuellen Benutzernamen angemeldet bist.<br>Bitte ersetze \"Hinweise etc.\" solltest du eine Hinweis oder eine Begr&uuml;ndung hinterlassen wollen.</p>
        <textarea rows=\"8\" class=\"form-control\" name=\"wpTextbox1\">{{safesubst:Renameuser
        |CURRENT={{subst:REVISIONUSER}} <!-- The \"{{subst:REVISIONUSER}}\" will automatically fill in your username -- please do not touch it! -->
        |NEW= " . htmlspecialchars($username) . "
        |REASON= Notes etc.
        }}
        </textarea>
        <input name=\"wpPreview\" value=\"wpPreview\" type=\"hidden\">
        <input value=\"0\" name=\"wpStarttime\" type=\"hidden\">
        <input value=\"0\" name=\"wpEdittime\" type=\"hidden\">
        <input value=\"0\" name=\"wpMinoredit\" type=\"hidden\">
        <br>
        <input class=\"btn btn-primary\" name=\"wpPreview\" value=\"Preview and Save\" type=\"submit\">
        </form>
        </div>";
}
function deform($username)
{
    echo "<div class=\"form-group\">
        <form id=\"upload\" method=\"post\" enctype=\"multipart/form-data\" action=\"https://de.wikipedia.org/w/index.php?title=Wikipedia:Benutzernamen_%C3%A4ndern&action=edit&section=new&nosummary=1&dtenable=0\" style=\"display:inline\">
        <h1>Benutzername &auml;ndern</h1>
        <p class=\"bg-info\">Achte darauf, dass du mit deinem aktuellen Benutzernamen angemeldet bist.<br>Bitte ersetze \"Hinweise etc.\" solltest du eine Hinweis oder eine Begr&uuml;ndung hinterlassen wollen.</p>
        <textarea rows=\"8\" class=\"form-control\" name=\"wpTextbox1\">{{subst:Wikipedia:Benutzernamen &auml;ndern/Preloadvorlage
        |1= " . htmlspecialchars($username) . "
        |2= Hinweise etc.
        }}
        </textarea>
        <input name=\"wpPreview\" value=\"wpPreview\" type=\"hidden\">
        <input value=\"0\" name=\"wpStarttime\" type=\"hidden\">
        <input value=\"0\" name=\"wpEdittime\" type=\"hidden\">
        <input value=\"0\" name=\"wpMinoredit\" type=\"hidden\">
        <br>
        <input class=\"btn btn-primary\" name=\"wpPreview\" value=\"Vorschau & Speichern\" type=\"submit\">
        </form>
        </div>";
}
function esform($username)
{
    echo "<div class=\"form-group\">
        <form id=\"upload\" method=\"post\" enctype=\"multipart/form-data\" action=\"https://es.wikipedia.org/w/index.php?title=Wikipedia:Cambiar_el_nombre_de_usuario&action=edit&section=new&nosummary=1&dtenable=0\" style=\"display:inline\">
        <h1>Cambiar el nombre de usuario</h1>
        <p class=\"bg-info\">Por favor verifica que has iniciado sesión con tu cuenta.</p>
        <textarea rows=\"8\" class=\"form-control\" name=\"wpTextbox1\">{{sust:renombrar usuario
        | 1 = " . htmlspecialchars($username) . "
        | 2 = Reemplaza esta línea de texto con el motivo por el que solicitas el cambio
        }}
        </textarea>
        <input name=\"wpPreview\" value=\"wpPreview\" type=\"hidden\">
        <input value=\"0\" name=\"wpStarttime\" type=\"hidden\">
        <input value=\"0\" name=\"wpEdittime\" type=\"hidden\">
        <input value=\"0\" name=\"wpMinoredit\" type=\"hidden\">
        <br>
        <input class=\"btn btn-primary\" name=\"wpPreview\" value=\"Previsualizar y guardar\" type=\"submit\">
        </form>
        </div>";
}
?>