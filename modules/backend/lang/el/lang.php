<?php
/* Greek Language Updated on 2016-07-16 v1.06 */
return [
    'auth' => [
        'title' => 'Περιοχή Διαχείρισης',
    ],
    'field' => [
        'invalid_type' => 'Χρησιμοποιήθηκε μη έγκυρος τύπος πεδίου :type.',
        'options_method_not_exists' => "H κλάση του μοντέλου πρέπει να καθορίζει μια μέθοδο :method() επιστροφής επίλογων για το πεδίο ':field'",
    ],
    'widget' => [
        'not_registered' => "Δεν έχει καθοριστεί το όνομα ':name' της κλάσης του Widget",
        'not_bound' => "Το Widget με το όνομα της κλάσης ':name' δεν έχει βρεθεί στον χειριστή.",
    ],
    'page' => [
        'untitled' => 'Χωρίς Τίτλο',
        'access_denied' => [
            'label' => 'Απαγορεύεται η πρόσβαση',
            'help' => "Δεν έχεις τα απαραίτητα δικαιώματα για να δεις αυτήν την σελίδα.",
            'cms_link' => 'Επιστροφή στό back-end.',
        ],
        'no_database' => [
            'label' => 'Δεν βρέθηκε η βάση δεδομένων',
            'help' => "Η βάση δεδομένων είναι απαραίτητη για να έχετε πρόσβαση στο back-end. Ελέγξτε εάν η βάση δεδομένων είναι ρυθμισμένη και συνδεδεμένη πριν προσπαθήσετε ξανά.",
            'cms_link' => 'Επιστροφή στην αρχική',
        ],
    ],
    'partial' => [
        'not_found_name' => "Το μερικό ':name' δεν βρέθηκε.",
    ],
    'account' => [
        'sign_out' => 'Αποσύνδεση',
        'login' => 'Σύνδεση',
        'reset' => 'Επαναφορά',
        'restore' => 'Αποκατάσταση',
        'login_placeholder' => 'σύνδεση',
        'password_placeholder' => 'κωδικός',
        'forgot_password' => 'Ξεχάσατε τον κωδικό σας;',
        'enter_email' => 'Συμπληρώστε το email σας',
        'enter_login' => 'Συμπληρώστε τον λογαριασμό σας',
        'email_placeholder' => 'email',
        'enter_new_password' => 'Πληκτρολογήστε νέο κωδικό.',
        'password_reset' => 'Επαναφορά Κωδικού',
        'restore_success' => 'Ένα μήνυμα έχει σταλεί στην διεύθυνση ηλεκτρονικού ταχυδρομείου σου με οδηγίες.',
        'reset_success' => 'Ο κωδικός σας έχει επαναφερθεί. Μπορείτε τώρα να συνδεθείτε.',
        'reset_error' => 'Τα στοιχεία που έχουν δοθεί για την επαναφορά του κωδικού είναι μη έγκυρα. Παρακαλούμε δοκιμάστε ξανά!',
        'reset_fail' => 'Δεν κατέστη δυνατό να επαναφερθεί ο κωδικός σας!',
        'apply' => 'Εφαρμογή',
        'cancel' => 'Άκυρο',
        'delete' => 'Διαγραφή',
        'ok' => 'Εντάξει',
    ],
    'dashboard' => [
        'menu_label' => 'Κέντρο Ελένχου',
        'widget_label' => 'Widget',
        'widget_width' => 'Πλάτος',
        'full_width' => 'πλήρες πλάτος',
        'manage_widgets' => 'Διαχείριση Widgets',
        'add_widget' => 'Προσθήκη Widget',
        'widget_inspector_title' => 'Ρύθμιση Widget',
        'widget_inspector_description' => 'Ρύθμιση του widget αναφορών',
        'widget_columns_label' => 'Πλάτος :columns',
        'widget_columns_description' => 'Το πλάτος του widget, ένας αριθμός μεταξύ του 1 και του 10.',
        'widget_columns_error' => 'Παρακαλούμε εισάγετε το πλάτος του widget σαν ένα αριθμό μεταξύ του 1 και του 10.',
        'columns' => '{1} στηλη|[2,Inf] στήλες',
        'widget_new_row_label' => 'Έναρξη νέας σειράς',
        'widget_new_row_description' => 'Τοποθετείστε το widget σε νέα σειρά.',
        'widget_title_label' => 'Τίτλος Widget',
        'widget_title_error' => 'O τίτλος του Widget είναι απαραίτητος.',
        'reset_layout' => 'Επαναφορά διάταξης',
        'reset_layout_confirm' => 'Επαναφορά της διάταξης στο προκαθορισμένο;',
        'reset_layout_success' => 'Η διάταξη επαναφέρθηκε',
        'make_default' => 'Ορισμός προκαθορισμένης',
        'make_default_confirm' => 'Να οριστεί η τρέχουσα διάταξη ως προκαθορισμένη;',
        'make_default_success' => 'Η τρέχουσα διάταξη είναι τώρα η προκαθορισμένη.',
        'status' => [
            'widget_title_default' => 'Κατάσταση συστήματος',
            'update_available' => '{0} διαθέσιμες ενημερώσεις!|{1} διαθέσιμη ενημέρωση!|[2,Inf] διαθέσιμες ενημερώσεις!',
            'updates_pending' => 'Εκκρεμούν ενημερώσεις λογισμικού',
            'updates_nil' => 'Το λογισμικό είναι ενημερωμένο',
            'updates_link' => 'Ενημέρωση',
            'warnings_pending' => 'Κάποια ζητήματα θέλουν  προσοχή',
            'warnings_nil' => 'Δεν υπάρχουν προειδοποιήσεις',
            'warnings_link' => 'Εμφάνιση',
            'core_build' => 'Έκδοση συστήματος',
            'event_log' => 'Καταγραφή συμβάντων',
            'request_log' => 'Καταγραφή αιτήσεων',
            'app_birthday' => 'Σε λειτουργία από',
        ],
        'welcome' => [
            'widget_title_default' => 'Καλώς ορίσατε',
            'welcome_back_name' => 'Καλώς ορίσατε ξανά στο :app, :name.',
            'welcome_to_name' => 'Καλώς ορίσατε στο :app, :name.',
            'first_sign_in' => 'Αυτή είναι η πρώτη φορά που συνδεεστε.',
            'last_sign_in' => 'Η τελευταία σύνδεση σας ήταν',
            'view_access_logs' => 'Προβολή του αρχείου καταγραφής προσβάσεων',
            'nice_message' => 'Να έχετε μια υπέροχη ημέρα!',
        ]
    ],
    'user' => [
        'name' => 'Διαχειριστής',
        'menu_label' => 'Διαχειριστές',
        'menu_description' => 'Διευθέτηση των διαχειριστών, των ομάδων και των δικαιωμάτων του back-end',
        'list_title' => 'Διαχείριση Διαχειριστών',
        'new' => 'Νέος Διαχειριστής',
        'login' => 'Λογαριασμός',
        'first_name' => 'Όνομα',
        'last_name' => 'Επώνυμο',
        'full_name' => 'Ονοματεπώνυμο',
        'email' => 'e-Mail',
        'groups' => 'Ομάδες',
        'groups_comment' => 'Καθορίστε σε ποιες ομάδες ανήκει αυτός ο λογαριασμός. Οι ομαδες καθορισουν τα δικαώματα του χρηστη, τα οποια μπορουν να παρακαμφθουν στο επιπεδο του χρηστη, στην καρτελα Δικαιωματων.',
        'avatar' => 'Avatar',
        'password' => 'Κωδικός',
        'password_confirmation' => 'Επιβεβαίωση Κωδικού',
        'permissions' => 'Δικαιώματα',
        'account' => 'Λογαριασμός',
        'superuser' => 'Υπέρ-Χρήστης',
        'superuser_comment' => 'Εκχώρηση σε αυτόν τον λογαριασμό απεριόριστη πρόσβαση σε όλες τις περιοχές του συστήματος. Οι υπερ-χρήστες μπορούν να προσθέσουν και να διαχειριστούν άλλους χρήστες.',
        'send_invite' => 'Αποστολή πρόσκλησης μέσω email',
        'send_invite_comment' => 'Αποστέλλει ένα μήνυμα καλωσορίσματος το οποίο περιέχει τις πληροφορίες σύνδεσης και του κωδικού.',
        'delete_confirm' => 'Διαγράφη αυτού του διαχειριστή;',
        'return' => 'Επιστροφή στην λίστα των διαχειριστών',
        'allow' => 'Επέτρεψε',
        'inherit' => 'Κληρονόμησε',
        'deny' => 'Απαγόρευσε',
        'group' => [
            'name' => 'Ομάδες',
            'name_comment' => 'Το όνομα εμφανίζεται στην λίστα των ομάδων κατά την Προσθήκη/Επεξεργασία της φόρμας των Διαχειριστών.',
            'name_field' => 'Όνομα',
            'description_field' => 'Περιγραφή',
            'is_new_user_default_field_label' => 'Προεπιλεγμένη ομάδα',
            'is_new_user_default_field_comment' => 'Προεπιλεγμένη προσθήκη νέων διαχειριστών σε αυτήν την ομάδα.',
            'code_field' => 'Κώδικας',
            'code_comment' => 'Συμπληρώστε ένα μοναδικό κωδικό αν θέλετε να έχετε πρόσβαση στο αντικείμενο της ομάδας μέσω του API.',
            'menu_label' => 'Διαχείρηση Ομάδων',
            'list_title' => 'Διαχείριση Ομάδων',
            'new' => 'Νέα Ομάδα',
            'delete_confirm' => 'Διαγραφή αυτής της ομάδας διαχειριστών;',
            'return' => 'Επιστροφή στην λίστα των ομάδων',
            'users_count' => 'Χρήστες',
        ],
        'preferences' => [
            'not_authenticated' => 'Δεν υπάρχει κανένας πιστοποιημένος χρήστης για να φορτωθούν ή να σωθούν οι ρυθμίσεις του.' ,
        ]
    ],
    'list' => [
        'default_title' => 'Λίστα',
        'search_prompt' => 'Αναζήτηση...',
        'no_records' => 'Δεν υπάρχουν εγγραφές σε αυτήν την προβολή.',
        'missing_model' => 'Η συμπεριφορά της λίστας χρησιμοποιήθηκε στην :class δεν έχει κάποιο καθορισμένο μοντέλο.',
        'missing_column' => 'Δεν υπάρχει ορισμός στηλών για τα :columns.',
        'missing_columns' => 'Η λίστα χρησιμοποιήθηκε στη :class δεν έχει ορισμένες στήλες λίστας.',
        'missing_definition' => "Η συμπεριφορά της λίστας δεν περιέχει μια στήλη για το ':field'.",
        'missing_parent_definition' => "Λίστα με τις συμπεριφορές οι οποίες δεν περιλαμβάνουν έναν ορισμό για ':definition'.",
        'behavior_not_ready' => 'Η συμπεριφορά της λίστας δεν έχει αρχικοποιηθεί, ελέγξτε ότι έχετε καλέσει την makeLists() στον χειριστή.',
        'invalid_column_datetime' => "Η τιμή της στήλης ':column' δεν είναι ένα αντικείμενο DateTime, μήπως διαφεύγει μια \$dates αναφορά στο μοντέλο?",
        'pagination' => 'Εμφάνιση εγγραφών: :from-:to απο :total',
        'prev_page' => 'Προηγούμενη σελίδα',
        'next_page' => 'Επόμενη σελίδα',
        'refresh' => 'Ανανέωση',
        'updating' => 'Αναβάθμιση...',
        'loading' => 'Φόρτωμα...',
        'setup_title' => 'Ρύθμιση λίστας',
        'setup_help' => 'Χρησιμοποιήστε το πλαίσιο ελέγχου για να επιλέξετε τις στήλες που θέλετε να δείτε στην λίστα. Μπορείτε να αλλάξετε την θέση των στηλών με το σύρσιμο πάνω και κάτω.',
        'records_per_page' => 'Εγγραφές ανά σελίδα',
        'records_per_page_help' => 'Επιλέξτε τον αριθμό των εγγραφών ανά σελίδα για εμφάνιση. Παρακαλούμε σημειώστε ότι ένας υψηλός αριθμός εγγραφών σε μια και μόνο σελίδα μπορεί να μειώσει την απόδοση.',
        'check' => 'Έλεγχος',
        'delete_selected' => 'Διαγραφή επιλεγμένου',
        'delete_selected_empty' => 'Δεν υπάρχουν επιλεγμένες εγγραφές για να διαγράψετε.',
        'delete_selected_confirm' => 'Να διαγραφούν οι επιλεγμένες εγγραφές;',
        'delete_selected_success' => 'Διαγραφή επιλεγμένων εγγραφών.',
        'column_switch_true' => 'Ναι',
        'column_switch_false' => 'Όχι'
    ],
    'fileupload' => [
        'attachment' => 'Επισύναψη',
        'help' => 'Προσθέστε τίτλο και περιγραφή για αυτήν την επισύναψη.',
        'title_label' => 'Τίτλος',
        'description_label' => 'Περιγραφή',
        'default_prompt' => 'Κάντε κλικ στο %s ή σύρετε ένα αρχείο εδώ για να το ανεβάσετε',
        'attachment_url' => 'URL Συνημμένου',
        'upload_file' => 'Ανέβασμα αρχείου',
        'upload_error' => 'Σφάλμα ανεβάσματος',
        'remove_confirm' => 'Είστε σίγουροι;',
        'remove_file' => 'Διαγραφή αρχείου',
    ],
    'form' => [
        'create_title' => 'Νέο :name',
        'update_title' => 'Επεξεργασία :name',
        'preview_title' => 'Προεπισκόπηση :name',
        'create_success' => ':name δημιουργήθηκε',
        'update_success' => ':name ενημερώθηκε',
        'delete_success' => ':name διαγράφηκε',
        'reset_success' => 'Η επαναφορά ολοκληρώθηκε',
        'missing_id' => 'Το ID της εγγραφής στην φόρμα δεν έχει οριστεί.',
        'missing_model' => 'Η συμπεριφορά της φόρμας που χρησιμοποιήθηκε στην :class δεν έχει καθορισμένο μοντέλο.',
        'missing_definition' => "Η συμπεριφορά της φόρμας δεν περιέχει ένα πεδίο για το ':field'.",
        'not_found' => 'Η εγγραφή της φόρμας με ID :id δεν βρέθηκε.',
        'action_confirm' => 'Είστε σίγουροι;',
        'create' => 'Δημιουργία',
        'create_and_close' => 'Δημιουργία και κλείσιμο',
        'creating' => 'Δημιουργία...',
        'creating_name' => 'Δημιουργία :name...',
        'save' => 'Αποθήκευση',
        'save_and_close' => 'Αποθήκευση και κλείσιμο',
        'saving' => 'Αποθήκευση...',
        'saving_name' => 'Αποθήκευση :name...',
        'delete' => 'Διαγραφή',
        'deleting' => 'Διαγραφή...',
        'confirm_delete' => 'Διαγραφή εγγραφής',
        'confirm_delete_multiple' => 'Διαγραφή επιλεγμένων εγγραφών;',
        'deleting_name' => 'Διαγραφή :name...',
        'reset_default' => 'Επαναφορά στο προκαθορισμένο',
        'resetting' => 'Επαναφορά',
        'resetting_name' => 'Επαναφορά :name',
        'undefined_tab' => 'Διάφορα',
        'field_off' => 'Όχι',
        'field_on' => 'Ναι',
        'add' => 'Προσθήκη',
        'apply' => 'Εφαρμογή',
        'cancel' => 'Άκυρο',
        'close' => 'Κλείσιμο',
        'confirm' => 'Επιβεβαίωση',
        'reload' => 'Επαναφόρτιση',
        'complete' => 'Ολοκλήρωση',
        'ok' => 'Εντάξει',
        'or' => 'ή',
        'confirm_tab_close' => 'Κλείσιμο της καρτέλας; Οι μη αποθηκευμένες αλλαγές θα χαθούν.',
        'behavior_not_ready' => 'Η συμπεριφορά δεν έχει αρχικοποιήσεις, ελέγξτε εάν έχετε καλέσει το initForm() στον χειριστή.',
        'preview_no_files_message' => 'Δεν υπάρχουν αρχεία που ανέβηκαν.',
        'preview_no_record_message' => 'Δεν είναι επιλεγμένη καμία εγγραφή.',
        'select' => 'Επιλογή',
        'select_all' => 'επιλογή όλων',
        'select_none' => 'επιλέξτε κανένα',
        'select_placeholder' => 'παρακαλούμε επιλέξτε',
        'insert_row' => 'Προσθήκη Σειράς',
        'insert_row_below' => 'Προσθήκη Σειράς από Κάτω',
        'delete_row' => 'Διαγραφή Σειράς',
        'concurrency_file_changed_title' => 'Το αρχείο έχει αλλάξει',
        'concurrency_file_changed_description' => "Το αρχείο το οποίο επεξεργάζεστε έχει αλλάξει στον δίσκο από έναν άλλο χρήστη. Μπορείτε είτε να επαναφορτώσετε το αρχείο και να χάσετε τις αλλαγές σας είτε να παρακάμψετε το αρχείο στον δίσκο.",
        'return_to_list' => 'Επιστροφή στην λίστα',
    ],
    'recordfinder' => [
        'find_record' => 'Ανεύρεση Εγγραφής',
    ],
    'relation' => [
        'missing_config' => "Η συμπεριφορά της σχέσης δεν έχει καμία ρύθμιση για το ':config'.",
        'missing_definition' => "Η συμπεριφορά της σχέσης δεν περιέχει ορισμό για το ':field'.",
        'missing_model' => 'Η συμπεριφορά της σχέσης που χρησιμοποιήθηκε στην :class δεν έχει καθορισμένο μοντέλο.',
        'invalid_action_single' => 'Αυτή η ενεργεία δεν μπορεί να εκτελεστεί σε μια μοναδική σχέση.',
        'invalid_action_multi' => 'Αυτή η ενέργεια δεν μπορεί να εκτελεστεί σε μια πολλαπλή σχέση.',
        'help' => 'Κάντε κλικ πάνω σε ένα αντικείμενο για να προσθέσετε',
        'related_data' => 'Σχετικά :name δεδομένα' ,
        'add' => 'Προσθήκη',
        'add_selected' => 'Προσθήκη επιλεγμένου',
        'add_a_new' => 'Προσθήκη νέου :name',
        'link_selected' => 'Σύνδεση του επιλεγμένου',
        'link_a_new' => 'Σύνδεση ενός νέου :name ',
        'cancel' => 'Άκυρο',
        'close' => 'Κλείσιμο',
        'add_name' => 'Προσθήκη :name',
        'create' => 'Δημιουργία',
        'create_name' => 'Δημιουργία :name',
        'update' => 'Ενημέρωση',
        'update_name' => 'Ενημέρωση :name',
        'preview' => 'Προεπισκόπηση',
        'preview_name' => 'Προεπισκόπηση :name',
        'remove' => 'Αφαίρεση',
        'remove_name' => 'Αφαίρεση :name',
        'delete' => 'Διαγραφή',
        'delete_name' => 'Διαγραφή :name',
        'delete_confirm' => 'Είστε σίγουροι;',
        'link' => 'Σύνδεση',
        'link_name' => 'Σύνδεση :name',
        'unlink' => 'Αποσύνδεση',
        'unlink_name' => 'Αποσύνδεση :name',
        'unlink_confirm' => 'Είστε σίγουροι;',
    ],
    'reorder' => [
        'default_title' => 'Αναδιάταξη εγγραφών',
        'no_records' => 'Δεν υπάρχουν διαθέσιμες εγγραφές για ταξινόμηση.',
    ],
    'model' => [
        'name' => 'Μοντέλο',
        'not_found' => "Η κλάση ':class' του μοντέλου με ID :id δεν μπόρεσε να βρεθεί",
        'missing_id' => 'Δεν έχει οριστεί το ID για να αναζητηθεί η εγγραφή του μοντέλου.',
        'missing_relation' => "Η κλάση ':class' του μοντέλου δεν περιέχει ένα ορισμό για την ':relation'.",
        'missing_method' => "Η κλάση ':class' του μοντέλου δεν περιέχει την μέθοδο ':method'.",
        'invalid_class' => "Το μοντέλο ':model' που χρησιμοποιήθηκε στην :class δεν είναι έγκυρο, πρέπει να κληρονομεί την κλάση του \Model.",
        'mass_assignment_failed' => "Η μαζική εκχώρηση για την ιδιότητα ':attribute' του μοντέλου απέτυχε.",
    ],
    'warnings' => [
        'tips' => 'Συμβουλές ρύθμισης του συστήματος',
        'tips_description' => 'Υπάρχουν ζητήματα για τα οποία πρέπει να δώσετε προσοχή με σκοπό να ρυθμιστεί το σύστημα ορθά.',
        'permissions'  => 'Ο φάκελος :name ή οι υποφάκελοι του δεν έχουν δικαίωμα εγγραφής για την PHP. Παρακαλούμε ρυθμίστε τα κατάλληλα δικαιώματα στον webserver για αυτό τον καταλογο.',
        'extension' => 'Η επέκταση :name της PHP δεν έχει εγκατασταθεί. Παρακαλούμε εγκαταστήστε την βιβλιοθήκη και ενεργοποιήστε την επέκταση.',
    ],
    'editor' => [




        'menu_label' => 'Editor settings',
        'menu_description' => 'Customize the global editor preferences, such as font size and color scheme.',
        'font_size' => 'Font size',
        'tab_size' => 'Tab size',
        'use_hard_tabs' => 'Indent using tabs',
        'code_folding' => 'Code folding',
        'code_folding_begin' => 'Mark begin',
        'code_folding_begin_end' => 'Mark begin and end',
        'autocompletion' => 'Autocompletion',
        'word_wrap' => 'Word wrap',
        'highlight_active_line' => 'Highlight active line',
        'auto_closing' => 'Automatically close tags',
        'show_invisibles' => 'Show invisible characters',
        'show_gutter' => 'Show gutter',
        'basic_autocompletion'=> 'Basic Autocompletion (Ctrl + Space)',
        'live_autocompletion'=> 'Live Autocompletion',
        'enable_snippets'=> 'Enable code snippets (Tab)',
        'display_indent_guides'=> 'Show indent guides',
        'show_print_margin'=> 'Show print margin',
        'mode_off' => 'Off',
        'mode_fluid' => 'Fluid',
        '40_characters' => '40 Characters',
        '80_characters' => '80 Characters',
        'theme' => 'Color scheme',
        'markup_styles' => 'Markup Styles',
        'custom_styles' => 'Custom stylesheet',
        'custom styles_comment' => 'Custom styles to include in the HTML editor.',
        'markup_classes' => 'Markup Classes',
        'paragraph' => 'Paragraph',
        'link' => 'Link',
        'table' => 'Table',
        'table_cell' => 'Table Cell',
        'image' => 'Image',
        'label' => 'Label',
        'class_name' => 'Class name',
        'markup_tags' => 'Markup Tags',
        'allowed_empty_tags' => 'Allowed empty tags',
        'allowed_empty_tags_comment' => 'The list of tags that are not removed when they have no content inside.',
        'allowed_tags' => 'Allowed tags',
        'allowed_tags_comment' => 'The list of allowed tags.',
        'no_wrap' => 'Do not wrap tags',
        'no_wrap_comment' => 'The list of tags that should not be wrapped inside block tags.',
        'remove_tags' => 'Remove tags',
        'remove_tags_comment' => 'The list of tags that are removed together with their content.'


    ],
    'tooltips' => [
        'preview_website' => 'Προεπισκόπηση ιστοσελίδας',
    ],
    'mysettings' => [
        'menu_label' => 'Οι ρυθμίσεις μου',
        'menu_description' => 'Ρυθμίσεις σχετικές με τον λογαριασμό διαχειριστή σας',
    ],
    'myaccount' => [
        'menu_label' => 'Ο λογαριασμός μου',
        'menu_description' => 'Ενημερώστε τις λεπτομερείς του λογαριασμού σας όπως το όνομα, την διεύθυνση email και τον κωδικού.',
        'menu_keywords' => 'ασφαλής σύνδεση',
    ],
    'branding' => [
        'menu_label' => 'Προσαρμογή του back-end',
        'menu_description' => 'Προσαρμόστε την περιοχή διαχείρισης όπως το όνομα, τα χρώματα και το λογότυπο.',
        'brand' => 'Διακριτικός Τίτλος',
        'logo' => 'Λογότυπο',
        'logo_description' => 'Ανεβάστε ένα προσαρμοσμένο λογότυπο για την χρήση στο back-end.',
        'app_name' => 'Όνομα Εφαρμογής',
        'app_name_description' => 'Το όνομα αυτό εμφανίζεται στην περιοχή τίλιου του back-end.',
        'app_tagline' => 'Ετικέτα Εφαρμογής',
        'app_tagline_description' => 'Αυτό το όνομα εμφανίζεται στην οθόνη σύνδεσης στο back-end.',
        'colors' => 'Χρώματα',
        'primary_color' => 'Πρωτεύων χρώμα',
        'secondary_color' => 'Δευτερεύων χρώμα',
        'accent_color' => 'Τονισμένο χρώμα',
        'styles' => 'Στυλ',
        'custom_stylesheet' => 'Προσαρμοσμένο stylesheet',
        'navigation' => 'Πλοήγηση',
        'menu_mode' => 'Στυλ μενού',
        'menu_mode_inline' => 'Ενσωματωμένο',
        'menu_mode_tile' => 'Πλακίδια',
        'menu_mode_collapsed' => 'Συμπτυγμένο',
    ],
    'backend_preferences' => [
        'menu_label' => 'Προτιμήσεις Back-End',
        'menu_description' => 'Διαχειριστείτε τις ρυθμίσεις του λογαριασμού σας όπως την επιθυμητή γλώσσα.',
        'region' => 'Περιοχή',
        'code_editor' => 'Επεξεργαστής κώδικα',
        'timezone' => 'Ζώνη ώρας',
        'timezone_comment' => 'Προσαρμογή των εμφανιζομένων ημερομηνιών σε αυτήν την ζώνη ώρας.',
        'locale' => 'Τοποθεσία',
        'locale_comment' => 'Επιλέξτε την επιθυμητή τοποθεσία για την χρήση γλώσσας.',
    ],
    'access_log' => [
        'hint' => 'Αυτό το αρχείο εμφανίζει μια λίστα με τις επιτυχημένες προσπάθειες σύνδεσης από τους διαχειριστές. Οι εγγραφές διατηρούνται για :days ημέρες.',
        'menu_label' => 'Αρχείο καταγραφής προσβάσεων',
        'menu_description' => 'Λίστα με τις επιτυχημένες προσβάσεις στο back-end.',
        'created_at' => 'Ημερομηνία & Ώρα',
        'login' => 'Σύνδεση',
        'ip_address' => 'Διεύθυνση IP',
        'first_name' => 'Όνομα',
        'last_name' => 'Επώνυμο',
        'email' => 'Email',
    ],
    'filter' => [
        'all' => 'όλα',
        'options_method_not_exists' => "Η κλάση του μοντέλου :model πρέπει να καθορίζει τις επιστρεφόμενες επιλογές της μεθόδου :method() για το φίλτρο ':filter'.",
        'date_all' => 'όλη η περίοδος',
    ],
    'import_export' => [
        'upload_csv_file' => '1. Ανέβασμα ενός CSV αρχείου',
        'import_file' => 'Εισαγωγή αρχείου',
        'first_row_contains_titles' => 'Η πρώτη γραμμή περιέχει τους τίτλούς των στηλων',
        'first_row_contains_titles_desc' => 'Αφήστε το αυτό επιλεγμένο εάν η πρώτη γραμμή στο CSV χρησιμοποιείται για τον τίτλο των στηλών.',
        'match_columns' => '2. Αντιστοίχιση των στηλών του αρχείου με τα πεδία στην βάση δεδομένων',
        'file_columns' => 'Στήλες αρχείου',
        'database_fields' => 'Πεδία βάσης δεδομένων',
        'set_import_options' => '3. Ορισμός επίλογων εισαγωγής',
        'export_output_format' => '1. Μορφή τύπου εξόδου',
        'file_format' => 'Μορφή αρχείου',
        'standard_format' => 'Τυποποιημένη μορφή',
        'custom_format' => 'Προσαρμοσμένη μορφή',
        'delimiter_char' => 'Χαρακτήρας Διαχωριστικού',
        'enclosure_char' => 'Χαρακτήρας Enclosure',
        'escape_char' => 'Χαρακτήρας Escape',
        'select_columns' => '2. Επιλέξτε τις στήλες που θα εξαχθούν',
        'column' => 'Στήλη',
        'columns' => 'Στήλες',
        'set_export_options' => '3. Ορισμός επιλογών εξαγωγής',
        'show_ignored_columns' => 'Εμφάνιση αγνοούμενων στηλών',
        'auto_match_columns' => 'Αυτόματή αντιστοίχιση στηλών',
        'created' => 'Δημιουργήθηκε',
        'updated' => 'Ενημερώθηκε',
        'skipped' => 'Παραλήφθηκε',
        'warnings' => 'Προειδοποιήσεις',
        'errors' => 'Λάθη',
        'skipped_rows' => 'Σειρές που Παραλήφθηκαν',
        'import_progress' => 'Πρόοδός εισαγωγής',
        'processing' => 'Επεξεργασία',
        'import_error' => 'Λάθος εισαγωγής',
        'upload_valid_csv' => 'Παρακαλώ ανεβάστε εάν συμβατό CSV αρχείο.',
        'drop_column_here' => 'Σύρετε μια στήλη εδώ...',
        'ignore_this_column' => 'Αγνόησε αυτήν την στήλη',
        'processing_successful_line1' => 'Η διαδικασία της εξαγωγής αρχείου ολοκληρώθηκε!',
        'processing_successful_line2' => 'Το πρόγραμμα περιήγησης θα μεταβεί στο κατέβασμα του αρχείου.',
        'export_progress' => 'Πρόοδος εξαγωγής',
        'export_error' => 'Εξαγωγή λάθους',
        'column_preview' => 'Προεπισκόπηση στήλης',
        'file_not_found_error' => 'Το αρχείο δεν βρέθηκε',
        'empty_error' => 'Δεν υπάρχουν δεδομένα για σταλούν για εξαγωγή',
        'empty_import_columns_error' => 'παρακαλούμε ορίστε κάποιες στήλες για εισαγωγή.',
        'match_some_column_error' => 'Παρακαλούμε αντιστοιχήστε κάποιες στήλες πρώτα.',
        'required_match_column_error' => 'Παρακαλούμε ορίστε μια αντιστοίχιση για το απαιτούμενο πεδίο :label.',
        'empty_export_columns_error' => 'Παρακαλούμε ορίστε κάποιες στήλες για να εξαχθούν.',
        'behavior_missing_uselist_error' => 'Πρέπει να υλοποιήσετε μια συμπεριφορά χειριστή ListController με την επιλογή εξαγωγής "useList" ενεργοποιημένη.',
        'missing_model_class_error' => 'παρακαλούμε ορίστε την ιδιότητα modelClass για τον τύπο :type',
        'missing_column_id_error' => 'Λείπει το αναγνωριστικό στήλης',
        'unknown_column_error' => 'Άγνωστη στήλη',
        'encoding_not_supported_error' => 'Η κωδικοποίηση του αρχείου προέλευσης δεν αναγνωριστικέ. παρακαλούμε επιλέξτε την προσαρμοσμένη μορφή αρχείου με την κατάλληλη κωδικοποίηση για την εισαγωγή του αρχείου σας.',
        'encoding_format' => 'Κωδικοποίηση αρχείου',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => 'Ανέβασμα και διαχείριση περιεχομένου μέσων - εικόνων, βίντεο, ήχων, εγγράφων,//Upload and manage media contents - images, videos, sounds, documents'
    ],
    'mediafinder' => [
        'label' => 'Media Finder',
        'default_prompt' => 'Click the %s button to find a media item'
    ],
    'media' => [
        'menu_label' => 'Μέσα',
        'upload' => 'Ανέβασμα',
        'move' => 'Μετακίνηση',
        'delete' => 'Διαγραφή',
        'add_folder' => 'Προσθήκη καταλόγου',
        'search' => 'Αναζήτηση',
        'display' => 'Εμφάνιση',
        'filter_everything' => 'Όλα',
        'filter_images' => 'Εικόνες',
        'filter_video' => 'Βίντεο',
        'filter_audio' => 'Ήχος',
        'filter_documents' => 'Έγγραφο',
        'library' => 'Βιβλιοθήκη',
        'size' => 'Μέγεθος',
        'title' => 'Τίτλος',
        'last_modified' => 'Τελευταία τροποποίηση',
        'public_url' => 'Δημόσιο URL',
        'click_here' => 'Κλικ εδώ',
        'thumbnail_error' => 'Σφάλμα κατά την δημιουργία μικρογραφίας.',
        'return_to_parent' => 'Επιστροφή στον γονικό κατάλογο',
        'return_to_parent_label' => 'Πήγαινε επάνω...',
        'nothing_selected' => 'Δεν επιλέχτηκε τίποτα.',
        'multiple_selected' => 'Επιλέχτηκαν πολλαπλά αντικείμενα.',
        'uploading_file_num' => 'Ανέβασμα :number αρχείων...',
        'uploading_complete' => 'Το ανέβασμα ολοκληρώθηκε',
        'uploading_error' => 'Το ανέβασμα απέτυχε',
        'type_blocked' => 'Ο τύπος του αρχείου που χρησιμοποιήθηκε μπλοκαρίστηκε για λόγους ασφαλείας.',
        'order_by' => 'Ταξινόμηση κατά',
        'folder' => 'Κατάλογος',
        'no_files_found' => 'Δεν βρέθηκαν αρχεία από το αίτημα σας.',
        'delete_empty' => 'παρακαλούμε επιλέξτε αντικείμενά για να τα σβήσετε.',
        'delete_confirm' => 'Διαγραφή των επιλεγμένων αντικείμενων;',
        'error_renaming_file' => 'Σφάλμα κατά την μετονομασία του αντικειμένου.',
        'new_folder_title' => 'Νέος κατάλογος',
        'folder_name' => 'Όνομα καταλόγου',
        'error_creating_folder' => 'Σφάλμα κατά την δημιουργία καταλόγου',
        'folder_or_file_exist' => 'Ένας κατάλογος ή αρχείο με το ίδιο όνομα υπάρχει ήδη.',
        'move_empty' => 'παρακαλούμε επιλέξτε αντικείμενα για να τα μετακινήσετε.',
        'move_popup_title' => 'Μετακίνηση αρχείων ή καταλογών.',
        'move_destination' => 'Κατάλογος προορισμού',
        'please_select_move_dest' => 'Παρακαλούμε επιλέξτε ένα κατάλογο προορισμού.',
        'move_dest_src_match' => 'Παρακαλούμε επιλέξτε έναν διαφορετικό κατάλογο προορισμού.',
        'empty_library' => 'Η βιβλιοθήκη Μέσων είναι άδεια. Ανεβάστε αρχεία ή δημιουργήστε καταλόγους για να ξεκινήσετε.',
        'insert' => 'Εισαγωγή',
        'crop_and_insert' => 'Περικοπή & Εισαγωγή',
        'select_single_image' => 'παρακαλούμε επιλέξτε μόνο μια εικόνα.',
        'selection_not_image' => 'Το επιλεγμένο αντικείμενο δεν είναι εικόνα.',
        'restore' => 'Αναίρεση όλων των αλλαγών',
        'resize' => 'Αλλαγή μεγέθους...',
        'selection_mode_normal' => 'Κανονικό',
        'selection_mode_fixed_ratio' => 'Κλειδωμένη αναλογία',
        'selection_mode_fixed_size' => 'Κλειδωμένο μέγεθος',
        'height' => 'Ύψος',
        'width' => 'Πλάτος',
        'selection_mode' => 'Λειτουργία επιλογής',
        'resize_image' => 'Αλλαγή μεγέθους εικόνας',
        'image_size' => 'Μέγεθος εικόνας:',
        'selected_size' => 'Επιλεγμένο:',
    ]
];
