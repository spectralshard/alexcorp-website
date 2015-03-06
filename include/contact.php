			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Allons prendre un café</h2>
						<p>Vous êtes intéressé de travailler avec moi?<br />Facile, il vous suffit de remplir le formulaire suivant, je vous répondrai sous peu.</p>
                        <p>T <a href="tel:514-222-2612">514.222.2612</a> | <a href="mailto:alexfoisy@alexcorp.ca">alexfoisy@alexcorp.ca</a></p>
					</header>
                    <div class="boxcontact container small">
                    <?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
$destinataire = 'alexfoisy@alexcorp.ca';

$copie = 'oui';

$form_action = '';

$message_envoye = "Votre message a bien été parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

/*
 * NoSpamQuestion affiche une question pour la validation d'un formulaire ...
 * $mode, mode question ou réponse par défaut tirage au sort de question {string}
 * $answer, lors de la demande d'une réponse à la question numero tant ... {int}
 *
 * @returns array
 *
 * Ajouter une question :
 * copier/coller ces lignes et remplir le contenu entre guillemets doubles :
 *
 * $array_pictures[$j]['num'] = $j; // ne pas changer cette ligne
 * $array_pictures[$j]['question'] = "mettre ici la question (correspondant à l'image si vous utilisez une image)";
 * $array_pictures[$j]['answer'] = "mettre ici la réponse à l'énigme";
 * $j++; // ne pas oublier cette ligne dans la copie :-)
 *
 */
function NoSpamQuestion($mode = 'ask', $answer = 0)
{
	$array_pictures = array(); $j = 0;

	$array_pictures[$j]['num'] = $j;
	$array_pictures[$j]['question'] = "Quelle est la sixième lettre du mot Design";
	$array_pictures[$j]['answer'] = "n";
	$j++;

	$array_pictures[$j]['num'] = $j;
	$array_pictures[$j]['question'] = "1 + 1=";
	$array_pictures[$j]['answer'] = "2";
	$j++;

	$array_pictures[$j]['num'] = $j;
	$array_pictures[$j]['question'] = "Ecrire 14 en lettres";
	$array_pictures[$j]['answer'] = "quatorze";
	$j++;

	if ($mode != 'ans')
	{
		$lambda = rand(0, count($array_pictures)-1);
		return $array_pictures[$lambda];
	}
	else
	{
		foreach($array_pictures as $i => $array)
		{
			if ($i == $answer)
			{
				return $array;
				break;
			};
		};
	};
};
/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/
	$nospam = NoSpamQuestion();

function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}

	$text = nl2br($text);
	return $text;
};

function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}

$nom        = (isset($_POST['nom']))        ? Rec($_POST['nom'])        : '';
$email      = (isset($_POST['email']))      ? Rec($_POST['email'])      : '';
$objet      = (isset($_POST['objet']))      ? Rec($_POST['objet'])      : '';
$message    = (isset($_POST['message']))    ? Rec($_POST['message'])    : '';
$antispam_h = (isset($_POST['antispam_h'])) ? Rec($_POST['antispam_h']) : '';
$antispam_r = (isset($_POST['antispam_r'])) ? Rec($_POST['antispam_r']) : '';

$email = (IsEmail($email)) ? $email : '';
$err_formulaire = false;

if (isset($_POST['envoi']))
{
	$verif_nospam = NoSpamQuestion('ans', $antispam_r);

	if (strtolower($antispam_h) != strtolower($verif_nospam['answer']))
	{
		echo '<p>Vous n\'avez pas répondu correctement à la question Antispam ...</p>';
	}
	else
	{
		if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
		{
			$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";

			if ($copie == 'oui')
			{
				$cible = $destinataire.','.$email;
			}
			else
			{
				$cible = $destinataire;
			};

			$message = str_replace("&#039;","'",$message);
			$message = str_replace("&#8217;","'",$message);
			$message = str_replace("&quot;",'"',$message);
			$message = str_replace('<br>','',$message);
			$message = str_replace('<br />','',$message);
			$message = str_replace("&lt;","<",$message);
			$message = str_replace("&gt;",">",$message);
			$message = str_replace("&amp;","&",$message);

			if (mail($cible, $objet, $message, $headers))
			{
				echo '<p>'.$message_envoye.'</p>';
			}
			else
			{
				echo '<p>'.$message_non_envoye.'</p>';
			};
		}
		else
		{
			echo '<p>'.$message_formulaire_invalide.'</p>';
			$err_formulaire = true;
		};
	};
};

if (($err_formulaire) || (!isset($_POST['envoi'])))
{
	echo '
                        <form id="contact" method="post" action="'.$form_action.'">
								<div class="row half">
									<div class="6u"><input class="form-text" required="true" type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" placeholder="Votre nom" /></div>
									<div class="6u"><input class="form-text" type="text" required="true" id="email" name="email" value="'.stripslashes($email).'" tabindex="2"  placeholder="Votre courriel" /></div>
								</div>

								<div class="row half">
                                    <div class="12u"><input class="form-text" type="text" required="true" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" placeholder="Sujet du message" /></div>
									<div class="12u"><textarea  class="form-textarea" id="message" required="true" name="message" tabindex="4" placeholder="Votre message" rows="6"></textarea></div>
                                    <div class="12u">
                                        <label for="antispam_h">'.$nospam['question'].'</label><br /><input  class="form-text"  type="text" name="antispam_h" id="antispam_h" /><input type="hidden" name="antispam_r" value="'.$nospam['num'].'" />
                                        </div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="button" name="envoi" value="Envoyer le message" /></li>
										</ul>
									</div>
								</div>
							</form>
                            <p>Les champs de formulaire marqué par * doivent être remplis, merci.</p>
';
};
?>
					</div>
				</div>
			</section>
