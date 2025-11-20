<?php
// TRANSLATION
if ($_GET["lang"] == "de") {
	$lang = "de";
	$langf = "Deutsch";
	$th = "Benutzernamen-Tool";
	$un = "Benutzername";
	$t0 = "<p>Dieses Tool prüft ob ein Benutzername bereits existiert und valide ist.</p>";
	$t1 = "Der Benutzername muss mit einem GROSSBUCHSTABEN beginnen.";
	$t2 = "<b>@</b> in Benutzernamen ist nicht möglich.";
	$t3 = "Benutzername zu lang.";
	$t4 = "Benutzername enthält verbotene Zeichen. (#, <, >, [, ], |, {, }, /, @, :, =, ...).";
	$t5 = "Der Benutzername ist gültig (Verbotene Zeichen/Format scan war negativ).";
	$t6 = "Der Benutzername existiert bereits.";
	$t7 = "Der Benutzername ist noch nicht registriert.";
	$t8 = "Bitte einen Nutzernamen eingeben.";
	$t9 = "Los!";
	$t10 = "Der Benutzername darf nicht mit „~2“ beginnen.";
	$t11 = "Der Benutzername enthält ungültige Unicode-Zeichen.";
	$t12 = "Dieser Benutzername ist reserviert.";
	$t13 = "Der Benutzername darf nicht wie eine IP-Adresse aussehen.";
	$t14 = "Der Benutzername darf keine erhöhten Berechtigungen vortäuschen.";
	$t15 = "Der Benutzername darf keine <a href='https://en.wikipedia.org/wiki/Top-level_domain'>Top-Level-Domains</a> enthalten.";
	$adjustWarn1 = "Dein Benutzername wird aus technischen Gründen zu '";
	$adjustWarn2 = "' angepasst.";
	$url = "https://de.wikipedia.org/wiki/Hilfe:Seitenname";
} elseif ($_GET["lang"] == "ru") {
	$lang = "ru";
	$langf = "Pусский";
	$th = "Инструмент для проверки имён пользователей";
	$un = "Имя участника";
	$t0 = "<p>Этот инструмент проверяет является ли имя пользователя действительным и находится ли оно в использовании.</p>";
	$t1 = "Имя пользователя должно начинаться с заглавной буквы.";
	$t2 = "<b>@</b> в имени пользователя не разрешается.";
	$t3 = "Имя пользователя слишком длинное.";
	$t4 = "Имя пользователя содержит запрещённые символы  (#, <, >, [, ], |, {, }, /, @, :, =, ...).";
	$t5 = "Выбранное имя пользователя действительно (проверка формата имени пользователя дала отрицательный результат).";
	$t6 = "Имя пользователя уже существует.";
	$t7 = "Имя пользователя не зарегистрировано.";
	$t8 = "Пожалуйста, введите имя пользователя для проверки.";
	$t9 = "НАЧАТЬ!";
	$t10 = "Имя пользователя не должно начинаться с «~2».";
	$t11 = "Имя пользователя содержит недопустимые символы Unicode.";
	$t12 = "Это имя пользователя зарезервировано.";
	$t13 = "Имя пользователя не должно походить на IP-адрес.";
	$t14 = "Имя пользователя не должно подразумевать повышенные права.";
	$t15 = "Имя пользователя не должно содержать <a href='https://en.wikipedia.org/wiki/Top-level_domain'>домены верхнего уровня</a>.";
	$adjustWarn1 = "Ваше имя пользователя будет изменено на '";
	$adjustWarn2 = "' из-за технических ограничений.";
} elseif ($_GET["lang"] == "zh") {
	$lang = "zh";
	$langf = "中文";
	$th = "用户名检查";
	$un = "用户名";
	$t0 = "<p>这个工具检查用户名是否有效且未被使用。</p>";
	$t1 = "用户名必须以大写字母开头。";
	$t2 = "用户名内不能包含<b>@</b>。";
	$t3 = "用户名过长。";
	$t4 = "用户名包含被禁止的字符（#、<、>、[、]、|、{、}、/、@、:、= ...)。";
	$t5 = "用户名 有效（未搜索到被禁止的字符）。";
	$t6 = "用户名已经存在。";
	$t7 = "用户名未被注册。";
	$t8 = "请输入一个要检查的用户名";
	$t9 = "开始！";
	$t10 = "用户名不能以“~2”开头。";
	$t11 = "用户名包含无效的 Unicode 字符。";
	$t12 = "该用户名已被保留。";
	$t13 = "用户名不得类似于 IP 地址。";
	$t14 = "用户名不得暗示具有高级权限。";
	$t15 = "用户名不得包含任何<a href='https://en.wikipedia.org/wiki/Top-level_domain'>顶级域名</a>。";
	$adjustWarn1 = "由于技术限制，您的用户名将调整为 '";
	$adjustWarn2 = "'。";
	$url = "https://zh.wikipedia.org/wiki/Wikipedia:%E5%91%BD%E5%90%8D%E5%B8%B8%E8%A7%84/%E6%8A%80%E6%9C%AF%E9%99%90%E5%88%B6";
} elseif ($_GET["lang"] == "hy") {
	$lang = "hy";
	$langf = "Հայերեն";
	$th = "Մասնակցային անունները ստուգելու գործիք";
	$un = "Մասնակցային անուն";
	$t0 = "<p>Այս գործիքը ստուգում է՝ արդյո՞ք մասնակցային անունը վավեր է կամ օգտագործվում է:</p>";
	$t1 = "Մասնակցային անունը պետք է սկսվի մեծատառով:";
	$t2 = "<b>@</b> մասնակցային անվան մեջ չի թույլատրվում:";
	$t3 = "Մասնակցային անունը չափազանց երկար է:";
	$t4 = "Մասնակցային անունը պարունակում է արգելված նշաններ (#, <, >, [, ], |, {, }, /, @, :, =, ...):";
	$t5 = "Ընտրված մասնակցային անունը վավեր է (անվան ձևաչափի ստուգումը տվեց բացասական արդյունք):";
	$t6 = "Մասնակցային անունն արդեն գոյություն ունի:";
	$t7 = "Մասնակցային անունը գրանցված է:";
	$t8 = "Խնդրում ենք մուտքագրել մասնակցային անունը՝ ստուգելու համար:";
	$t9 = "ՍԿՍԵԼ";
	$t10 = "Մասնակցային անունը չի կարող սկսվել «~2»-ով։";
	$t11 = "Մասնակցային անունը պարունակում է անվավեր Unicode նիշ(եր)։";
	$t12 = "Այս օգտագործողի անունը պահպանված է։";
	$t13 = "Օգտագործողի անունը չպետք է նման լինի IP հասցեին։";
	$t14 = "Օգտագործողի անունը չպետք է նշանավորի բարձրացված իրավասություններ։";
	$t15 = "Օգտագործողի անունը չպետք է պարունակի <a href='https://en.wikipedia.org/wiki/Top-level_domain'>բարձրակարգ տիրույթներ</a>։";
	$adjustWarn1 = "Ձեր օգտագործողի անունը տեխնիկական սահմանափակումների պատճառով կփոխվի՝ '";
	$adjustWarn2 = "'։";
} elseif ($_GET["lang"] == "es") {
	$lang = "es";
	$langf = "Español";
	$th = "Validador de nombres de usuario";
	$un = "Nombre de usuario";
	$t0 = "<p>Esta herramienta comprueba si un nombre de usuario es válido y no está en uso.</p>";
	$t1 = "El nombre de usuario debe empezar por una letra mayúscula.";
	$t2 = "No se permiten arrobas (<b>@</b>) en los nombres de usuario.";
	$t3 = "El nombre de usuario es demasiado largo.";
	$t4 = "El nombre de usuario contiene caracteres no permitidos (#, <, >, [, ], |, {, }, /, @. :, =, etc.).";
	$t5 = "El nombre de usuario seleccionado es válido (la comprobación de formato de nombres de usuario no permitidos ha sido negativa).";
	$t6 = "El nombre de usuario ya existe.";
	$t7 = "El nombre de usuario no está registrado.";
	$t8 = "Por favor introduce un nombre de usuario para ser comprobado.";
	$t9 = "Comprobar";
	$t10 = "El nombre de usuario no debe empezar por «~2».";
	$t11 = "El nombre de usuario contiene caracteres Unicode no válidos.";
	$t12 = "Ese nombre de usuario está reservado.";
	$t13 = "El nombre de usuario no debe parecerse a una dirección IP.";
	$t14 = "El nombre de usuario no debe implicar privilegios elevados.";
	$t15 = "El nombre de usuario no debe incluir ningún <a href='https://en.wikipedia.org/wiki/Top-level_domain'>dominio de nivel superior</a>.";
	$adjustWarn1 = "Tu nombre de usuario se ajustará a '";
	$adjustWarn2 = "' debido a limitaciones técnicas.";
	$url = "https://es.wikipedia.org/wiki/Wikipedia:Restricciones_t%C3%A9cnicas_en_t%C3%ADtulos";
} elseif ($_GET["lang"] == "ca") {
	$lang = "ca";
	$langf = "Català";
	$th = "Validador de nom d'usuari";
	$un = "Nom d'usuari";
	$t0 = "<p>Aquesta ferramenta comprova si un nom d'usuari és vàlid i no està en ús.</p>";
	$t1 = "El nom d'usuari ha de començar per una lletra majúscula.";
	$t2 = "No es permeten caràcters <b>@</b> als noms d'usuari.";
	$t3 = "El nom d'usuari és massa llarg.";
	$t4 = "El nom d'usuari conté caràcters no permesos (#, <, >, [, ], |, {, }, /, @, :, =, ...).";
	$t5 = "El nom d'usuari seleccionat és vàlid (la comprovació de format de noms d'usuari no permesos ha sigut negativa).";
	$t6 = "El nom d'usuari ja existeix.";
	$t7 = "El nom d'usuari no està registrat.";
	$t8 = "Per favor, introdueix un nom d'usuari per a ser comprovat.";
	$t9 = "Som-hi!";
	$t10 = "El nom d'usuari no pot començar per «~2».";
	$t11 = "El nom d'usuari conté caràcters Unicode no vàlids.";
	$t12 = "Aquest nom d'usuari està reservat.";
	$t13 = "El nom d'usuari no ha de semblar una adreça IP.";
	$t14 = "El nom d'usuari no ha d'implicar privilegis elevats.";
	$t15 = "El nom d'usuari no ha d'incloure cap <a href='https://en.wikipedia.org/wiki/Top-level_domain'>domini de nivell superior</a>.";
	$adjustWarn1 = "El teu nom d'usuari s'ajustarà a '";
	$adjustWarn2 = "' a causa de limitacions tècniques.";
} elseif ($_GET["lang"] == "ar") {
	$lang = "ar";
	$langf = "العربية";
	$th = "أداة التحقق لأسماء المستخدمين";
	$un = "اسم المستخدم";
	$t0 = "<p>هذه الأداة تتحقق من وجود الاسم من قبل أو لا.</p>";
	$t1 = "الأسماء بالإنجليزية يجب ان تبدأ بحروف كابيتال.";
	$t2 = "<b>@</b> هذا الاسم غير مسموح به.";
	$t3 = "اسم المستخدم طويل جداً.";
	$t4 = "يحتوي على حروف ممنوعة مثل (#, <, >, [, ], |, {, }, /, @, :, =, ...).";
	$t5 = "الاسم المطلوب متاح ولكن مكتوب بصيغة ممنوعة ولا يمكن التسجيل به.";
	$t6 = "الاسم تم تسجيله من قبل، يرجى اختيار اسم اخر.";
	$t7 = "الاسم غير مسجل من قبل.";
	$t8 = "أدخل الاسم المطلوب للفحص.";
	$t9 = "أذهب!";
	$t10 = "يجب ألا يبدأ اسم المستخدم بـ «~2».";
	$t11 = "اسم المستخدم يحتوي على أحرف Unicode غير صالحة.";
	$t12 = "اسم المستخدم هذا محجوز.";
	$t13 = "يجب ألا يشبه اسم المستخدم عنوان IP.";
	$t14 = "يجب ألا يوحي اسم المستخدم بامتلاك صلاحيات مرتفعة.";
	$t15 = "يجب ألا يتضمن اسم المستخدم أي <a href='https://en.wikipedia.org/wiki/Top-level_domain'>نطاقات عليا</a>.";
	$adjustWarn1 = "سيتم تعديل اسم المستخدم الخاص بك إلى '";
	$adjustWarn2 = "' بسبب القيود التقنية.";
	$url = "https://ar.wikipedia.org/wiki/%D9%88%D9%8A%D9%83%D9%8A%D8%A8%D9%8A%D8%AF%D9%8A%D8%A7:%D8%AA%D8%AD%D8%AF%D9%8A%D8%A7%D8%AA_%D8%AA%D9%82%D9%86%D9%8A%D8%A9";
} elseif ($_GET["lang"] == "id") {
	$lang = "id";
	$langf = "Bahasa Indonesia";
	$th = "Validator nama pengguna";
	$un = "Nama pengguna";
	$t0 = "<p>Alat ini memeriksa apakah sebuah nama pengguna valid dan tidak digunakan.</p>";
	$t1 = "Nama pengguna wajib diawali dengan huruf kapital.";
	$t2 = "<b>@</b> dalam nama pengguna tidak diizinkan.";
	$t3 = "Nama pengguna terlalu panjang.";
	$t4 = "Nama pengguna mengandung karakter yang tidak diizinkan (#, <, >, [, ], |, {, }, /, @, :, =, ...).";
	$t5 = "Nama pengguna terpilih valid (pencarian format nama pengguna yang tidak diizinkan nihil).";
	$t6 = "Nama pengguna telah ada.";
	$t7 = "Nama pengguna belum terdaftar.";
	$t8 = "Masukkan nama pengguna untuk diperiksa.";
	$t9 = "Jalankan!";
	$t10 = "Nama pengguna tidak boleh dimulai dengan \"~2\".";
	$t11 = "Nama pengguna mengandung karakter Unicode yang tidak valid.";
	$t12 = "Nama pengguna tersebut telah dicadangkan.";
	$t13 = "Nama pengguna tidak boleh menyerupai alamat IP.";
	$t14 = "Nama pengguna tidak boleh menyiratkan hak istimewa yang lebih tinggi.";
	$t15 = "Nama pengguna tidak boleh menyertakan <a href='https://en.wikipedia.org/wiki/Top-level_domain'>domain tingkat atas</a>.";
	$adjustWarn1 = "Nama pengguna Anda akan disesuaikan menjadi '";
	$adjustWarn2 = "' karena keterbatasan teknis.";
} elseif ($_GET["lang"] == "ja") {
	$lang = "ja";
	$langf = "日本語";
	$th = "利用者名 バリデータ";
	$un = "利用者名";
	$t0 = "<p> このツールでは、利用者名が有効で使用されていないかどうかを確認します。 </p>";
	$t1 = "利用者名は大文字で始める必要があります。";
	$t2 = "ユーザー名に<b>@</b>は使用できません。";
	$t3 = "利用者名が長すぎます。";
	$t4 = "利用者名に禁止されている文字(#, <, >, [, ], |, {, }, /, @, :, =, ...)が含まれています。";
	$t5 = "選択した利用者名は有効です（許可されていない利用者名の形式は見つかりませんでした）。";
	$t6 = "利用者名は既に利用されています。";
	$t7 = "利用者名は登録されていません。";
	$t8 = "確認する利用者名を入力してください。";
	$t9 = "実行!";
	$t10 = "利用者名は「~2」で始めることはできません。";
	$t11 = "利用者名に無効な Unicode 文字が含まれています。";
	$t12 = "そのユーザー名は予約済みです。";
	$t13 = "ユーザー名は IP アドレスのように見えてはいけません。";
	$t14 = "ユーザー名は権限があるように誤解させてはいけません。";
	$t15 = "ユーザー名に<a href='https://en.wikipedia.org/wiki/Top-level_domain'>トップレベルドメイン</a>を含めてはいけません。";
	$adjustWarn1 = "技術的な制限により、ユーザー名は '";
	$adjustWarn2 = "' に調整されます。";
} else {
	$lang = "en";
	$langf = "English";
	$th = "Username Validator";
	$un = "Username";
	$t0 = "<p>This tool checks if a username is valid and not in use.</p>";
	$t1 = "Username must start with a capital letter.";
	$t2 = "<b>@</b> in username is not allowed.";
	$t3 = "Username is too long.";
	$t4 = "Username contains forbidden characters (#, <, >, [, ], |, {, }, /, @, :, =, ...).";
	$t5 = "The selected username is valid (disallowed username format scan was negative).";
	$t6 = "Username already exists.";
	$t7 = "Username is not registered.";
	$t8 = "Please enter a username to check.";
	$t9 = "Go!";
	$t10 = "Username must not start with '~2'.";
	$t11 = "Username contains invalid Unicode character(s).";
	$t12 = "That username is reserved.";
	$t13 = "Username must not resemble an IP address.";
	$t14 = "Username must not imply elevated privillages.";
	$t15 = "Username must not include any <a href='https://en.wikipedia.org/wiki/Top-level_domain'>top-level domains</a>.";
	$adjustWarn1 = "Your username will be adjusted to '";
	$adjustWarn2 = "' due to technical limitations.";
	$url = "https://en.wikipedia.org/wiki/Wikipedia:Naming_conventions_(technical_restrictions)#Restrictions_on_usernames";
}

$wgReservedUsernames = [
	'MediaWiki default', // Default 'Main Page' and MediaWiki: message pages
	'Conversion script', // Used for the old Wikipedia software upgrade
	'Maintenance script', // Maintenance scripts which perform editing, image import script
	'Template namespace initialisation script', // Used in 1.2->1.3 upgrade
	'ScriptImporter', // Default user name used by maintenance/importSiteScripts.php
	'Delete page script', // Default user name used by maintenance/deleteBatch.php
	'Move page script', // Default user name used by maintenance/moveBatch.php
	'Command line script', // Default user name used by maintenance/undelete.php
	'Unknown user', // Used in WikiImporter & RevisionStore for revisions with no author and in User for invalid user id
	'msg:double-redirect-fixer', // Automatic double redirect fix
	'msg:usermessage-editor', // Default user for leaving user messages
	'msg:proxyblocker', // For $wgProxyList and Special:Blockme (removed in 1.22)
	'msg:sorbs', // For $wgEnableDnsBlacklist etc.
	'msg:spambot_username', // Used by cleanupSpam.php
	'msg:autochange-username', // Used by anon category RC entries (parser functions, Lua & purges)
];
?>