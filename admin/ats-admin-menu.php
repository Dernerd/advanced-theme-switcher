<div class="wrap">
<html>
  <body>
    <p>
      <title>Advanced Theme Switcher</title><br><br>
      <h2>Shortcode-Optionen</h2><br><br>
      Der Advanced Theme Switcher 1.0.8.2 unterstützt jetzt die Verwendung eines Shortcodes. So kannst Du die Themenauflistung innerhalb eines Beitrags anzeigen lassen und nicht nur auf die Anzeige innerhalb eines Widgets beschränkt sein. Und wie Du wahrscheinlich weißt, werden Widgets nicht zwischen Themen übertragen. Wenn das Thema gewechselt wird, geht das Widget verloren.
      <br><br>
      Der grundlegende Shortcode mit allen Standardoptionen sieht einfach so aus:<br>
      <br>
      <code>[adv_theme_switcher]</code><br>
      <br>
      Es gibt auch viele Optionen, die Du verwenden kannst, um die Ausgabe der Themenliste anzupassen. Hier im Detail aufgeführt:<br>
      <br>
      display_type - Mögliche Werte: dropdown, list, menu (nur für WP Toolbar), no/false<br>
      Beispiel: <code>[adv_theme_switcher display_type='list' display_type_sub='list']</code><br>
      Wie die Werte andeuten, kannst Du die Themen in Dropdown-/Select-, ungeordneter Liste- oder Menüformat anzeigen. Das Menüformat ist NUR für das ClassicPress Toolbar-Menü erlaubt.<br>
      <br>
      display_type_sub - Wird nur in den Einstellungen 'ADV_THEME_SWITCHER_TOOLBAR' verwendet (siehe unten). Mögliche Werte: dropdown (default), menu.<br>
      Dies wird verwendet, um die Anzeige der zweiten Ebene-Optionen im WP Toolbar-Menü zu steuern. Du kannst die zweiten Ebene-Elemente als Dropdown- oder Menüpunkte anzeigen.<br>
      <br>
      show_theme_parent - Mögliche Werte: yes (default) oder no<br>
      Beispiel: <code>[adv_theme_switcher show_theme_parent='yes']</code><br>
      show_theme_version<br>
      Hiermit kannst Du die Anzeige des Eltern-/Basisthemas steuern, wenn es auch Kinder hat. Wenn auf 'yes' gesetzt, werden Eltern- und Kindthema angezeigt. Wenn auf 'no' gesetzt, werden nur Kindthemen angezeigt. Auch Basisthemen, die keine Kindthemen haben, werden ebenfalls angezeigt.
    </p>
      <h2>Advanced Theme Switcher Optionen</h2>
      <h3>Optionen für den Advanced Theme Switcher</h3>
      <p>
      <b>Option: show_theme_groups</b><br>
      Mögliche Werte: yes (Standard) oder no<br>
      Beispiel: [adv_theme_switcher show_theme_groups='no']<br>
      Diese Option wird nur verwendet, wenn die Option 'show_theme_parent' auf 'yes' eingestellt ist. Wenn sie auf 'yes' eingestellt ist, werden die Eltern-/Kind-Themes in einer Hierarchie-Ausgabe dargestellt. Das Kind-Theme wird dann eingerückt unter dem Eltern-Theme angezeigt. Wenn sie auf 'no' eingestellt ist, werden die Eltern- und Kind-Themes in einer normalen Ausgabe dargestellt.
      </p>
      <p>
      <b>Option: show_theme_parent_folder</b><br>
      Mögliche Werte: yes (Standard) oder no<br>
      Beispiel: <code>[adv_theme_switcher show_theme_parent_folder='yes']</code><br>
      Diese Option hängt davon ab, wie deine Themes im Verzeichnis /wp-content/themes/ organisiert sind. ClassicPress ermöglicht es, deine Themes in Unterverzeichnisse zu verschieben. Du kannst beispielsweise deine Themes in Unterverzeichnisse wie /wp-content/themes/Free oder /wp-content/themes/Premium gruppieren. ClassicPress unterstützt nur eine Ebene von Unterverzeichnissen. Wenn du deine Themes in Unterverzeichnissen organisiert hast und diese Option auf 'yes' eingestellt ist, wird das Plugin die Ausgabe mit einer äußeren Hierarchieebene anzeigen. Der Name des Unterverzeichnisses wird als Bezeichnung für diese äußere Hierarchieebene verwendet.
      </p>
      <p>
      <b>Option: show_theme_version</b><br>
      Mögliche Werte: yes (Standard) oder no<br>
      Beispiel: <code>[adv_theme_switcher show_theme_version='no']</code><br>
      Wenn sie auf 'yes' eingestellt ist, wird die Version des Themes als Teil des Themen-Namens eingeschlossen. Wenn sie auf 'no' eingestellt ist, wird die Version nicht angezeigt.
      </p>
      <p>
      <b>show_theme_parent_filter</b> - Thema-Verzeichnistext<br>
      Beispiel: <code>[adv_theme_switcher show_theme_parent_filter='twentythirteen']</code><br>
      Mit dieser Option kannst Du die Anzeige der Themen auf eine Teilliste beschränken. Wenn Deine Themen in Unterverzeichnissen organisiert sind (siehe Hinweise zur Option 'show_theme_parent_folder') und eines dieser Unterverzeichnisse 'Free' heißt, dann wird durch das Setzen dieser Option auf 'Free' nur Themen innerhalb dieses Unterverzeichnisses angezeigt. Außerdem kannst Du diese Option auf ein bestimmtes Elternthema festlegen. Als zweites Beispiel gehen wir davon aus, dass Du eine Reihe von Kinderthemen basierend auf dem ClassicPress TwentyThirteen Theme hast. Du kannst diese Option auf 'twentythirteen' setzen und nur das Elternthema und die Kinderthemen werden angezeigt.
      </p>
      <p>
      <b>Globale Definition</b><br>
      Der Advanced Theme Switcher 1.0.8.2 unterstützt jetzt die Verwendung von Definitionen in Deiner wp-config.php. Diese Definitionen (zwei davon) ermöglichen es Dir, die Standardoptionen sowie Optionen zur Steuerung des WP Toolbar-Menüs zu kontrollieren. Mit den oben beschriebenen Kurzcode-Optionen kannst Du die Optionen=Werte-Paare definieren, um zu steuern, wie der Advanced Theme Switcher die Informationen ausgibt.
      </p>
      <p>
      <b>Standardoptionen: 'ADV_THEME_SWITCHER_DEFAULTS'</b><br>
      Kann verwendet werden, um die Standardoptionen festzulegen. Das bedeutet, dass dies für Widgets und Kurzcodes die verwendete Standardoption ist. Du kannst diese Standardoptionen dann über die lokalen Kurzcode- oder Widget-Optionen überschreiben.
      </p>
      <p>
      Beispiel:<br>
      <code>define("ADV_THEME_SWITCHER_DEFAULTS", 'display_type=dropdown&show_theme_parent=yes&show_theme_version=yes&show_theme_groups=yes&show_theme_parent_folder=yes');</code>
      </p>
      <p>
         WP Toolbar Optionen: 'ADV_THEME_SWITCHER_TOOLBAR'
      </p>
      <p>
         Diese Definition wird verwendet, um die Ausgabe des ClassicPress Toolbar-Menüs zu steuern. Zum Beispiel kannst du das Menü nicht anzeigen lassen. Du kannst die Ausgabe in einem Dropdown oder einer Kombination aus Menü und Dropdowns anzeigen.
      </p>
      <p>
         Beispiel 1: Verstecke das WP Toolbar-Menü
      </p>
      <p>
         <code>define('ADV_THEME_SWITCHER_TOOLBAR', 'display_type=false');</code>
      </p>
      <p>
         Beispiel 2: Zeige die Untermenü-Elemente als Dropdown an, statt als Untermenü-Elemente.
      </p>
      <p>
         <code>define('ADV_THEME_SWITCHER_TOOLBAR', 'display_type=menu&display_type_sub=dropdown');</code>
      </p>

</div>