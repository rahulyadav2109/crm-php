<?php
/* Copyright (C) 2012	Regis Houssin	<regis@dolibarr.fr>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$main = array(
		'CHARSET' => 'UTF-8',
		'DIRECTION' => 'rtl',
		'SeparatorDecimal' => '.',
		'SeparatorThousand' => ',',
		'FormatDateShort' => '%m/%d/%Y',
		'FormatDateShortJava' => 'MM/dd/yyyy',
		'FormatDateShortJQuery' => 'dd/mm/yy',
		'FormatHourShort' => '%I:%M %p',
		'FormatHourShortDuration' => '%H:%M',
		'FormatDateTextShort' => '%b %d, %Y',
		'FormatDateText' => '%B %d, %Y',
		'FormatDateHourShort' => '%m/%d/%Y %I:%M %p',
		'FormatDateHourTextShort' => '%b %d, %Y, %I:%M %p',
		'FormatDateHourText' => '%B %d, %Y, %I:%M %p',
		'DatabaseConnection' => 'מסד נתונים חיבור',
		'NoTranslation' => 'No translation',
		'NoRecordFound' => 'Aucun enregistrement trouvé',
		'NoError' => 'אין שגיאה',
		'Error' => 'שגיאה',
		'ErrorFieldRequired' => '&quot;%s&quot; שדה חובה',
		'ErrorFieldFormat' => '&quot;%s&quot; שדה יש ​​ערך רע',
		'ErrorFileDoesNotExists' => '%s הקובץ אינו קיים',
		'ErrorFailedToOpenFile' => 'נכשל בפתיחת %s קבצים',
		'ErrorCanNotCreateDir' => 'אין אפשרות ליצור %s בימוי',
		'ErrorCanNotReadDir' => 'לא יכול לקרוא %s בימוי',
		'ErrorConstantNotDefined' => 'פרמטר לא %s מוגדר',
		'ErrorUnknown' => 'Unkown שגיאה',
		'ErrorSQL' => 'SQL שגיאה',
		'ErrorLogoFileNotFound' => '&quot;%s&quot; קובץ הלוגו לא נמצא',
		'ErrorGoToGlobalSetup' => 'עבור &quot;החברה / קרן ההתקנה כדי לתקן את זה',
		'ErrorGoToModuleSetup' => 'עבור ההתקנה מודול כדי לתקן את זה',
		'ErrorFailedToSendMail' => 'נכשל לשלוח דואר (= השולח %s, מקלט = %s)',
		'ErrorAttachedFilesDisabled' => 'להגיש חיבור מושבת בשרת זה',
		'ErrorFileNotUploaded' => 'הקובץ לא נטען. ודא כי גודל אינו עולה על המרבי המותר, כי שטח פנוי זמין בדיסק וכי אין כבר קובץ עם שם זהה בספריה זו.',
		'ErrorInternalErrorDetected' => 'שגיאה זוהה',
		'ErrorNoRequestRan' => 'הבקשה לא רץ',
		'ErrorWrongHostParameter' => 'המארחת לא בסדר פרמטר',
		'ErrorYourCountryIsNotDefined' => 'המדינה שלך לא מוגדר. עבור לדף הבית של תוכנית ההתקנה, ערוך לפרסם שוב את הטופס.',
		'ErrorRecordIsUsedByChild' => 'לא הצליחו למחוק את הרשומה. רישום זה נעשה שימוש על ידי אחד לפחות הרשומות הילד.',
		'ErrorWrongValue' => 'טעות ערך',
		'ErrorWrongValueForParameterX' => 'ערך שגוי %s פרמטרים',
		'ErrorNoRequestInError' => 'לא בקשה בטעות',
		'ErrorServiceUnavailableTryLater' => 'השירות אינו זמין כרגע. נסה שוב מאוחר יותר.',
		'ErrorDuplicateField' => 'ערך כפול בתחום ייחודי',
		'ErrorSomeErrorWereFoundRollbackIsDone' => 'מספר שגיאות נמצאו. אנחנו החזרה שינויים.',
		'ErrorConfigParameterNotDefined' => '<b>%s</b> הפרמטר אינו מוגדר בתוך הקובץ <b>conf.php</b> Dolibarr config.',
		'ErrorCantLoadUserFromDolibarrDatabase' => 'לא הצליחו למצוא <b>%s</b> המשתמש במסד הנתונים Dolibarr.',
		'ErrorNoVATRateDefinedForSellerCountry' => 'שגיאה, אין שיעורי מע&quot;מ שהוגדרו &quot;%s של המדינה.',
		'ErrorNoSocialContributionForSellerCountry' => 'שגיאה, לא מבנה תרומה חברתית מוגדרת &quot;%s של המדינה.',
		'ErrorFailedToSaveFile' => 'שגיאה, לא הצליחו לשמור את הקובץ.',
		'ErrorOnlyPngJpgSupported' => ', שגיאה בלבד. PNG ו. קובץ JPG פורמט התמונה נתמכים.',
		'ErrorImageFormatNotSupported' => 'PHP שלך לא תומך פונקציות כדי להמיר תמונות של פורמט זה.',
		'SeeAlso' => 'ראה גם %s',
		'BackgroundColorByDefault' => 'ברירת המחדל של צבע הרקע',
		'FileWasNotUploaded' => 'קובץ נבחר על הקובץ המצורף, אך לא הועלתה עד כה. לחץ על &quot;צרף קובץ&quot; בשביל זה.',
		'NbOfEntries' => 'Nb של ערכי',
		'GoToWikiHelpPage' => 'קרא את העזרה המקוונת (צריך גישה לאינטרנט)',
		'GoToHelpPage' => 'קריאה לעזרה',
		'RecordSaved' => 'השיא נשמר',
		'LevelOfFeature' => 'רמה של תכונות',
		'NotDefined' => 'לא מוגדר',
		'DefinedAndHasThisValue' => 'מוגדר ערך',
		'IsNotDefined' => 'לא מוגדר',
		'DolibarrInHttpAuthenticationSoPasswordUseless' => 'מצב Dolibarr אימות היא ההגדרה <b>%s</b> ב <b>conf.php</b> קובץ ההגדרות. <br> משמעות הדבר היא כי הנתונים הסיסמה extern כדי Dolibarr, כדי לשנות שדה זה יכול להיות ללא תופעות.',
		'Administrator' => 'מנהל',
		'Undefined' => 'לא מוגדר',
		'PasswordForgotten' => 'סיסמה שנשכחה?',
		'SeeAbove' => 'ראה לעיל',
		'HomeArea' => 'בית בשטח',
		'LastConnexion' => 'חיבור אחרון',
		'PreviousConnexion' => 'החיבור הקודם',
		'ConnectedOnMultiCompany' => 'מחוברים על הסביבה',
		'ConnectedSince' => 'מאז מחובר',
		'AuthenticationMode' => 'Authentification מצב',
		'RequestedUrl' => 'כתובת האתר המבוקש',
		'DatabaseTypeManager' => 'סוג מסד נתונים המנהל',
		'RequestLastAccess' => 'בקשה לקבלת גישה למסדי נתונים האחרון',
		'RequestLastAccessInError' => 'בקשה לקבלת גישה למסדי נתונים האחרון בטעות',
		'ReturnCodeLastAccessInError' => 'חזור קוד גישה למסדי נתונים האחרון בטעות',
		'InformationLastAccessInError' => 'מידע עבור גישה למסדי נתונים האחרון בטעות',
		'DolibarrHasDetectedError' => 'Dolibarr זיהה טעות טכנית',
		'InformationToHelpDiagnose' => 'זהו מידע שיכול לסייע אבחון',
		'MoreInformation' => 'מידע נוסף',
		'NotePublic' => 'הערה (ציבורי)',
		'NotePrivate' => 'הערה (פרטי)',
		'PrecisionUnitIsLimitedToXDecimals' => 'Dolibarr היה ההתקנה להגביל הדיוק של מחירי היחידות <b>%s</b> שברים עשרוניים.',
		'DoTest' => 'מבחן',
		'ToFilter' => 'סנן',
		'WarningYouHaveAtLeastOneTaskLate' => 'אזהרה, יש לך לפחות יסוד אחד חרג עיכוב סובלנות.',
		'yes' => 'כן',
		'Yes' => 'כן',
		'no' => 'לא',
		'No' => 'לא',
		'All' => 'כל',
		'Home' => 'בית',
		'Help' => 'לעזור',
		'OnlineHelp' => 'עזרה מקוונת',
		'PageWiki' => 'Wiki עמוד',
		'Always' => 'תמיד',
		'Never' => 'אף פעם',
		'Under' => 'תחת',
		'Period' => 'תקופה',
		'PeriodEndDate' => 'תאריך הסיום של התקופה',
		'Activate' => 'להפעיל',
		'Activated' => 'מופעל',
		'Closed' => 'סגור',
		'Closed2' => 'סגור',
		'Enabled' => 'מופעל',
		'Disable' => 'השבת',
		'Disabled' => 'נכה',
		'Add' => 'להוסיף',
		'AddLink' => 'הוסף קישור',
		'Update' => 'לעדכן',
		'AddActionToDo' => 'הוסף אירוע לעשות',
		'AddActionDone' => 'הוסף אירוע לעשות',
		'Close' => 'לסגור',
		'Close2' => 'לסגור',
		'Confirm' => 'לאשר',
		'ConfirmSendCardByMail' => 'האם אתה באמת רוצה לשלוח את התוכן של הכרטיס בדואר <b>%s?</b>',
		'Delete' => 'למחוק',
		'Remove' => 'להסיר',
		'Resiliate' => 'Resiliate',
		'Cancel' => 'לבטל',
		'Modify' => 'לשנות',
		'Edit' => 'לערוך',
		'Validate' => 'לאמת',
		'ToValidate' => 'כדי לאמת',
		'Save' => 'להציל',
		'SaveAs' => 'שמירה בשם',
		'TestConnection' => 'מבחן הקשר',
		'ToClone' => 'לשבט',
		'ConfirmClone' => 'בחר את הנתונים שברצונך לשכפל:',
		'NoCloneOptionsSpecified' => 'אין נתונים לשבט מוגדר.',
		'Of' => 'של',
		'CopyOf' => 'עותק של',
		'Show' => 'להראות',
		'ShowCardHere' => 'הצג כרטיס',
		'Search' => 'חיפוש',
		'SearchOf' => 'חיפוש',
		'Valid' => 'תקף',
		'Approve' => 'לאשר',
		'ReOpen' => 'פתח מחדש',
		'Upload' => 'שלח קובץ',
		'Select' => 'לבחור',
		'Choose' => 'לבחור',
		'ChooseLangage' => 'בחר את השפה שלך',
		'Resize' => 'שינוי גודל',
		'Recenter' => 'Recenter',
		'Author' => 'מחבר',
		'User' => 'משתמש',
		'Users' => 'משתמשים',
		'Group' => 'קבוצה',
		'Groups' => 'קבוצות',
		'Password' => 'סיסמה',
		'PasswordRetype' => 'להקליד מחדש את הסיסמה',
		'NoteSomeFeaturesAreDisabled' => 'שים לב, הרבה תכונות / מודולים מבוטלות בהפגנה זו.',
		'Name' => 'שם',
		'Person' => 'אדם',
		'Parameter' => 'פרמטר',
		'Parameters' => 'פרמטרים',
		'Value' => 'ערך',
		'GlobalValue' => 'עולמי ערך',
		'PersonalValue' => 'ערך אישי',
		'NewValue' => 'ערך חדש',
		'CurrentValue' => 'ערך נוכחי',
		'Code' => 'קוד',
		'Type' => 'סוג',
		'Language' => 'שפה',
		'MultiLanguage' => 'שפה רב',
		'Note' => 'הערה',
		'CurrentNote' => 'הערה הנוכחי',
		'Title' => 'כותרת',
		'Label' => 'לייבל',
		'RefOrLabel' => 'Ref. או תווית',
		'Info' => 'התחבר',
		'Family' => 'משפחה',
		'Description' => 'תאור',
		'Designation' => 'תאור',
		'Model' => 'מודל',
		'DefaultModel' => 'ברירת המחדל של המודל',
		'Action' => 'מקרה',
		'About' => 'על',
		'Number' => 'מספר',
		'NumberByMonth' => 'מספר חודש',
		'AmountByMonth' => 'סכום לפי חודש',
		'Numero' => 'מספר',
		'Limit' => 'להגביל',
		'Limits' => 'גבולות',
		'DevelopmentTeam' => 'צוות פיתוח',
		'Logout' => 'התנתקות',
		'Connection' => 'הקשר',
		'Setup' => 'הגדרת',
		'Alert' => 'ערני',
		'Previous' => 'קודם',
		'Next' => 'הבא',
		'Cards' => 'כרטיסים',
		'Card' => 'כרטיס',
		'Now' => 'עכשיו',
		'Date' => 'תאריך',
		'DateStart' => 'היום מתחילים',
		'DateEnd' => 'תאריך סיום',
		'DateCreation' => 'יצירה תאריך',
		'DateModification' => 'שינוי תאריך',
		'DateModificationShort' => 'Modif. תאריך',
		'DateLastModification' => 'שינוי אחרון תאריך',
		'DateValidation' => 'אימות תאריך',
		'DateClosing' => 'מחזור מסחר',
		'DateDue' => 'בשל תאריך',
		'DateValue' => 'ערך תאריך',
		'DateValueShort' => 'ערך תאריך',
		'DateOperation' => 'מבצע תאריך',
		'DateOperationShort' => 'אופר. תאריך',
		'DateLimit' => 'הגבלת תאריך',
		'DateRequest' => 'בקשה תאריך',
		'DateProcess' => 'תהליך תאריך',
		'DatePlanShort' => 'תאריך מהוקצע',
		'DateRealShort' => 'כה אמיתי.',
		'DateBuild' => 'דווח על תאריך בנייה',
		'DatePayment' => 'תאריך התשלום',
		'DurationYear' => 'שנה',
		'DurationMonth' => 'חודש',
		'DurationWeek' => 'שבוע',
		'DurationDay' => 'יום',
		'DurationYears' => 'שנים',
		'DurationMonths' => 'חודשים',
		'DurationWeeks' => 'שבועות',
		'DurationDays' => 'ימים',
		'Year' => 'שנה',
		'Month' => 'חודש',
		'Week' => 'שבוע',
		'Day' => 'יום',
		'Hour' => 'שעה',
		'Minute' => 'דקה',
		'Second' => 'שני',
		'Years' => 'שנים',
		'Months' => 'חודשים',
		'Days' => 'ימים',
		'days' => 'ימים',
		'Hours' => 'שעות',
		'Minutes' => 'דקות',
		'Seconds' => 'שניות',
		'Today' => 'היום',
		'Yesterday' => 'אתמול',
		'Tomorrow' => 'מחר',
		'Quadri' => 'Quadri',
		'MonthOfDay' => 'חודש יום',
		'HourShort' => 'H',
		'Rate' => 'קצב',
		'UseLocalTax' => 'Include tax',
		'LocalTaxDesc' => 'Some countries apply 2 or 3 taxes on each invoice line. If this is the case, choose type for second and third tax and its rate. Possible type are:<br>1 : local tax apply on products and services without vat (vat is not applied on local tax)<br>2 : local tax apply on products and services before vat (vat is calculated on amount + localtax)<br>3 : local tax apply on products without vat (vat is not applied on local tax)<br>4 : local tax apply on products before vat (vat is calculated on amount + localtax)<br>5 : local tax apply on services without vat (vat is not applied on local tax)<br>6 : local tax apply on services before vat (vat is calculated on amount + localtax)<br>7 : local tax is a fix amount applied on global invoice',
		'Bytes' => 'בתים',
		'KiloBytes' => 'קילובייט',
		'MegaBytes' => 'מגה בייט',
		'GigaBytes' => 'ג \'יגה בייט',
		'TeraBytes' => 'טרה',
		'b' => 'ב.',
		'Kb' => 'KB',
		'Mb' => 'MB',
		'Gb' => 'Gb',
		'Tb' => 'שחפת',
		'Cut' => 'לחתוך',
		'Copy' => 'העתק',
		'Paste' => 'להדביק',
		'Default' => 'ברירת מחדל',
		'DefaultValue' => 'ערך ברירת מחדל',
		'DefaultGlobalValue' => 'עולמי ערך',
		'Price' => 'מחיר',
		'UnitPrice' => 'מחיר היחידה',
		'UnitPriceHT' => 'מחיר ליחידה (נטו)',
		'UnitPriceTTC' => 'מחיר היחידה',
		'PriceU' => 'למעלה',
		'PriceUHT' => 'UP (נטו)',
		'PriceUTTC' => 'למעלה',
		'Amount' => 'כמות',
		'AmountInvoice' => 'סכום החשבונית',
		'AmountPayment' => 'סכום לתשלום',
		'AmountHTShort' => 'סכום (נטו)',
		'AmountTTCShort' => 'סכום (מס Inc)',
		'AmountHT' => 'סכום (נטו ממס)',
		'AmountTTC' => 'סכום (מס Inc)',
		'AmountVAT' => 'סכום המס',
		'AmountLT1ES' => 'סכום RE',
		'AmountLT2ES' => 'סכום IRPF',
		'AmountTotal' => 'סה&quot;כ כמות',
		'AmountAverage' => 'ממוצע כמות',
		'PriceQtyHT' => 'מחיר כמות זו (נטו ממס)',
		'PriceQtyMinHT' => 'כמות מחיר דקות. (נטו ממס)',
		'PriceQtyTTC' => 'מחיר זה (מס Inc) כמות',
		'PriceQtyMinTTC' => 'כמות מחיר דקות. (כולל מס)',
		'Percentage' => 'אחוזים',
		'Total' => 'סך הכל',
		'SubTotal' => 'סיכום ביניים',
		'TotalHTShort' => 'סך הכל (נטו)',
		'TotalTTCShort' => 'סך הכל (מס Inc)',
		'TotalHT' => 'סך הכל (נטו ממס)',
		'TotalTTC' => 'סך הכל (מס Inc)',
		'TotalTTCToYourCredit' => 'סך הכל (מס Inc) האשראי שלך',
		'TotalVAT' => 'סה&quot;כ מס',
		'TotalLT1ES' => 'סה&quot;כ RE',
		'TotalLT2ES' => 'סה&quot;כ IRPF',
		'IncludedVAT' => 'כלל מס',
		'HT' => 'נטו ממס',
		'TTC' => 'חברת מס',
		'VAT' => 'מס קניה',
		'LT1ES' => 'רי',
		'LT2ES' => 'IRPF',
		'VATRate' => 'שעור המס',
		'Average' => 'ממוצע',
		'Sum' => 'סכום',
		'Delta' => 'דלתא',
		'Module' => 'מודול',
		'Option' => 'אופציה',
		'List' => 'רשימה',
		'FullList' => 'רשימה מלאה',
		'Statistics' => 'סטטיסטיקה',
		'OtherStatistics' => 'סטטיסטיקות אחרות',
		'Status' => 'מצב',
		'Ref' => 'Ref.',
		'RefSupplier' => 'Ref. ספק',
		'RefPayment' => 'Ref. תשלום',
		'CommercialProposals' => 'הצעות מסחריות',
		'Comment' => 'הערה',
		'Comments' => 'תגובות',
		'ActionsToDo' => 'אירועים לעשות',
		'ActionsDone' => 'אירועים לעשות',
		'ActionsToDoShort' => 'לעשות',
		'ActionsRunningshort' => 'העבודה',
		'ActionsDoneShort' => 'נעשה',
		'ActionNotApplicable' => 'לא ישים',
		'ActionRunningNotStarted' => 'כדי להתחיל',
		'ActionRunningShort' => 'העבודה',
		'ActionDoneShort' => 'מוגמר',
		'CompanyFoundation' => 'החברה / קרן',
		'ContactsForCompany' => 'צור קשר / adresses עבור מפלגה זו 3',
		'ContactsAddressesForCompany' => 'Contacts/addresses for this third party',
		'AddressesForCompany' => 'Addresses for this third party',
		'ActionsOnCompany' => 'אירועים על מפלגה זו 3',
		'ActionsOnMember' => 'אירועים על משתמש זה',
		'NActions' => '%s אירועים',
		'NActionsLate' => '%s מאוחר',
		'Filter' => 'סנן',
		'RemoveFilter' => 'הסר לסנן',
		'ChartGenerated' => 'תרשים שנוצר',
		'ChartNotGenerated' => 'תרשים שנוצר לא',
		'GeneratedOn' => 'לבנות על %s',
		'Generate' => 'ליצור',
		'Duration' => 'משך',
		'TotalDuration' => 'סה&quot;כ משך',
		'Summary' => 'תקציר',
		'MyBookmarks' => 'הסימניות שלי',
		'OtherInformationsBoxes' => 'מידע תיבות אחרים',
		'DolibarrBoard' => 'Dolibarr הלוח',
		'DolibarrStateBoard' => 'סטטיסטיקה',
		'DolibarrWorkBoard' => 'משימות עבודה לוח',
		'Available' => 'זמין',
		'NotYetAvailable' => 'עדיין לא זמינה',
		'NotAvailable' => 'לא זמין',
		'Popularity' => 'פופולריות',
		'Categories' => 'קטגוריות',
		'Category' => 'קטגוריה',
		'By' => 'על ידי',
		'From' => 'מן',
		'to' => 'אל',
		'and' => 'ו -',
		'or' => 'או',
		'Other' => 'אחר',
		'Others' => 'אחרים',
		'OtherInformations' => 'ידיעות אחרות',
		'Quantity' => 'כמות',
		'Qty' => 'כמות',
		'ChangedBy' => 'שונה על ידי',
		'ReCalculate' => 'לבנות מחדש',
		'ResultOk' => 'הצלחה',
		'ResultKo' => 'כשלון',
		'Reporting' => 'דיווח',
		'Reportings' => 'דיווח',
		'Draft' => 'טיוטה',
		'Drafts' => 'דמקה',
		'Validated' => 'תוקף',
		'Opened' => 'פתח',
		'New' => 'חדש',
		'Discount' => 'הנחה',
		'Unknown' => 'לא ידוע',
		'General' => 'כללי',
		'Size' => 'גודל',
		'Received' => 'קיבל',
		'Paid' => 'בתשלום',
		'Topic' => 'Sujet',
		'ByCompanies' => 'על ידי צדדים שלישיים',
		'ByUsers' => 'ידי משתמשים',
		'Links' => 'קישורים',
		'Link' => 'קשר',
		'Receipts' => 'תקבולים',
		'Rejects' => 'דוחה',
		'Preview' => 'תצוגה מקדימה',
		'NextStep' => 'השלב הבא',
		'PreviousStep' => 'הצעד הקודם',
		'Datas' => 'נתונים',
		'None' => 'אף אחד',
		'NoneF' => 'אף אחד',
		'Late' => 'מאוחר',
		'Photo' => 'תמונה',
		'Photos' => 'תמונות',
		'AddPhoto' => 'הוספת תמונה',
		'Login' => 'כניסה',
		'CurrentLogin' => 'הנוכחי התחברות',
		'January' => 'ינואר',
		'February' => 'פברואר',
		'March' => 'מרץ',
		'April' => 'אפריל',
		'May' => 'מאי',
		'June' => 'יוני',
		'July' => 'יולי',
		'August' => 'אוגוסט',
		'September' => 'ספטמבר',
		'October' => 'אוקטובר',
		'November' => 'נובמבר',
		'December' => 'דצמבר',
		'JanuaryMin' => 'ינואר',
		'FebruaryMin' => 'פבואר',
		'MarchMin' => 'קלקול',
		'AprilMin' => 'אפריל',
		'MayMin' => 'מאי',
		'JuneMin' => 'יוני',
		'JulyMin' => 'יולי',
		'AugustMin' => 'אוגוסט',
		'SeptemberMin' => 'ספטמבר',
		'OctoberMin' => 'אוקטובר',
		'NovemberMin' => 'נובמבר',
		'DecemberMin' => 'דצמבר',
		'Month01' => 'ינואר',
		'Month02' => 'פברואר',
		'Month03' => 'מרץ',
		'Month04' => 'אפריל',
		'Month05' => 'רשאי',
		'Month06' => 'יוני',
		'Month07' => 'יולי',
		'Month08' => 'אוגוסט',
		'Month09' => 'ספטמבר',
		'Month10' => 'אוקטובר',
		'Month11' => 'נובמבר',
		'Month12' => 'דצמבר',
		'MonthShort01' => 'ינואר',
		'MonthShort02' => 'פבואר',
		'MonthShort03' => 'קלקול',
		'MonthShort04' => 'אפריל',
		'MonthShort05' => 'רשאי',
		'MonthShort06' => 'יוני',
		'MonthShort07' => 'יולי',
		'MonthShort08' => 'אוגוסט',
		'MonthShort09' => 'ספטמבר',
		'MonthShort10' => 'אוקטובר',
		'MonthShort11' => 'נובמבר',
		'MonthShort12' => 'דצמבר',
		'AttachedFiles' => 'קבצים מצורפים ומסמכים',
		'FileTransferComplete' => 'הקובץ הועלה בהצלחה',
		'DateFormatYYYYMM' => 'YYYY-MM',
		'DateFormatYYYYMMDD' => 'YYYY-MM-DD',
		'DateFormatYYYYMMDDHHMM' => 'YYYY-MM-DD HH: SS',
		'ReportName' => 'דווח על השם',
		'ReportPeriod' => 'דווח על התקופה',
		'ReportDescription' => 'תאור',
		'Report' => 'דווח',
		'Keyword' => 'מות CLE',
		'Legend' => 'אגדה',
		'FillTownFromZip' => 'למלא העיר zip',
		'ShowLog' => 'הצג להיכנס',
		'File' => 'קובץ',
		'Files' => 'קבצים',
		'NotAllowed' => 'אסור',
		'ReadPermissionNotAllowed' => 'הרשאת קריאה אסור',
		'AmountInCurrency' => 'סכום במטבע %s',
		'Example' => 'דוגמה',
		'Examples' => 'דוגמאות',
		'NoExample' => 'אין דוגמה',
		'FindBug' => 'דווח על בעיה',
		'NbOfThirdParties' => 'מספר צדדים שלישיים',
		'NbOfCustomers' => 'מספר הלקוחות',
		'NbOfLines' => 'מספר השורות',
		'NbOfObjects' => 'מספר האובייקטים',
		'NbOfReferers' => 'מספר מפנים',
		'Referers' => 'מפנים',
		'TotalQuantity' => 'סה&quot;כ כמות',
		'DateFromTo' => 'מ %s כדי %s',
		'DateFrom' => 'מ %s',
		'DateUntil' => 'עד %s',
		'Check' => 'לבדוק',
		'Internal' => 'פנימי',
		'External' => 'חיצוני',
		'Internals' => 'פנימי',
		'Externals' => 'חיצוני',
		'Warning' => 'אזהרה',
		'Warnings' => 'אזהרות',
		'BuildPDF' => 'בניית PDF',
		'RebuildPDF' => 'לבנות מחדש PDF',
		'BuildDoc' => 'בנה דוק',
		'RebuildDoc' => 'לבנות מחדש את דוק',
		'Entity' => 'סביבה',
		'Entities' => 'ישויות',
		'EventLogs' => 'יומנים',
		'CustomerPreview' => 'לקוחות תצוגה מקדימה',
		'SupplierPreview' => 'הספק תצוגה מקדימה',
		'AccountancyPreview' => 'חשבונאות תצוגה מקדימה',
		'ShowCustomerPreview' => 'הצג תצוגה מקדימה של הלקוח',
		'ShowSupplierPreview' => 'הצג תצוגה מקדימה הספק',
		'ShowAccountancyPreview' => 'הצג תצוגה מקדימה של ראיית חשבון',
		'ShowProspectPreview' => 'הצג תצוגה מקדימה של האפשרות',
		'RefCustomer' => 'Ref. לקוח',
		'Currency' => 'מטבע',
		'InfoAdmin' => 'מידע עבור מנהלי מערכת',
		'Undo' => 'לבטל',
		'Redo' => 'לעשות שוב',
		'ExpandAll' => 'הרחב הכל',
		'UndoExpandAll' => 'בטל להרחיב',
		'Reason' => 'טעם',
		'FeatureNotYetSupported' => 'התכונה לא נתמכת עדיין',
		'CloseWindow' => 'סגור חלון',
		'Question' => 'שאלה',
		'Response' => 'תגובה',
		'Priority' => 'עדיפות',
		'SendByMail' => 'שלח באמצעות הדואר האלקטרוני',
		'MailSentBy' => 'דואר אלקטרוני שנשלח על ידי',
		'TextUsedInTheMessageBody' => 'דוא&quot;ל הגוף',
		'SendAcknowledgementByMail' => 'שלח Ack. באמצעות דוא&quot;ל',
		'NoEMail' => 'לא דואר אלקטרוני',
		'Owner' => 'בעל',
		'DetectedVersion' => 'לאתר גרסה',
		'FollowingConstantsWillBeSubstituted' => 'הקבועים הבאים יהיה תחליף עם הערך המתאים.',
		'Refresh' => 'לרענן',
		'BackToList' => 'חזרה לרשימה',
		'GoBack' => 'לחזור',
		'CanBeModifiedIfOk' => 'יכול להיות שונה אם תקפה',
		'CanBeModifiedIfKo' => 'יכול להיות שונה אם לא תקף',
		'RecordModifiedSuccessfully' => 'הקלט שונה בהצלחה',
		'RecordsModified' => '%s records modified',
		'AutomaticCode' => 'קוד אוטומטי',
		'NotManaged' => 'לא הצליח',
		'FeatureDisabled' => 'תכונה מושבתת',
		'MoveBox' => 'העבר %s תיבת',
		'Offered' => 'מוצע',
		'NotEnoughPermissions' => 'אתה לא צריך אישור לפעולה זו',
		'SessionName' => 'מושב שם',
		'Method' => 'שיטה',
		'Receive' => 'לקבל',
		'PartialWoman' => 'חלקי',
		'PartialMan' => 'חלקי',
		'TotalWoman' => 'סך הכל',
		'TotalMan' => 'סך הכל',
		'NeverReceived' => 'אף פעם לא קיבל',
		'Canceled' => 'בוטלה',
		'YouCanChangeValuesForThisListFromDictionnarySetup' => 'אתה יכול לשנות ערכים עבור רשימה זו מן התקנה התפריט - dictionnary',
		'Color' => 'צבע',
		'Documents' => 'קבצים מקושרים',
		'DocumentsNb' => 'קבצים מקושרים (%s)',
		'Documents2' => 'מסמכים',
		'BuildDocuments' => 'מסמכים שנוצרו',
		'UploadDisabled' => 'טען נכים',
		'MenuECM' => 'מסמכים',
		'MenuAWStats' => 'AWStats',
		'MenuMembers' => 'משתמשים',
		'MenuAgendaGoogle' => 'גוגל סדר היום',
		'ThisLimitIsDefinedInSetup' => 'Dolibarr גבול (תפריט בית הגדרת אבטחה): %s KB, PHP גבול: %s Kb',
		'NoFileFound' => 'אין מסמכים שנשמרו בספריה זו',
		'CurrentUserLanguage' => 'השפה הנוכחית',
		'CurrentTheme' => 'נושא נוכחי',
		'DisabledModules' => 'מודולים עם מוגבלויות',
		'For' => 'עבור',
		'ForCustomer' => 'עבור הלקוח',
		'Signature' => 'חתימה',
		'HidePassword' => 'הצג הפקודה עם הסיסמה מוסתר',
		'UnHidePassword' => 'הצג הפקודה אמיתי עם הסיסמה ברורה',
		'Root' => 'שורש',
		'Informations' => 'ידיעות',
		'Page' => 'עמוד',
		'Notes' => 'הערות',
		'AddNewLine' => 'הוספת קו חדש',
		'AddFile' => 'הוסף קובץ',
		'ListOfFiles' => 'רשימת הקבצים הזמינים',
		'FreeZone' => 'טקסט חופשי',
		'CloneMainAttributes' => 'שיבוט אובייקט עם תכונות עיקריות שלה',
		'PDFMerge' => 'PDF מיזוג',
		'Merge' => 'למזג',
		'PrintContentArea' => 'הצג בעמוד להדפיס אזור התוכן הראשי',
		'NoMenu' => 'אין תפריט משנה',
		'WarningYouAreInMaintenanceMode' => 'אזהרה, אתה נמצא במצב תחזוקה, כך שרק <b>%s</b> הכניסה מותרת לשימוש היישום כרגע.',
		'CoreErrorTitle' => 'שגיאת מערכת',
		'CoreErrorMessage' => 'מצטערים, אירעה שגיאה. לבדוק את יומני, או פנה למנהל המערכת.',
		'CreditCard' => 'כרטיס אשראי',
		'FieldsWithAreMandatory' => 'שדות עם <b>%s</b> הם שדות חובה',
		'FieldsWithIsForPublic' => 'שדות עם <b>%s</b> מוצגים ברשימה ציבורית של חברים. אם אתה לא רוצה את זה, בדוק את תיבת &quot;הציבור&quot;.',
		'AccordingToGeoIPDatabase' => '(על פי convertion GeoIP)',
		'Line' => 'קו',
		'NotSupported' => 'לא נתמך',
		'RequiredField' => 'שדה חובה',
		'Result' => 'תוצאה',
		'ToTest' => 'מבחן',
		'ValidateBefore' => 'כרטיס יש תוקף לפני השימוש בתכונה זו',
		'Visibility' => 'ראות',
		'Private' => 'פרטי',
		'Hidden' => 'מוסתר',
		'Resources' => 'משאבים',
		'Source' => 'מקור',
		'Prefix' => 'קידומת',
		'Before' => 'לפני',
		'After' => 'לאחר',
		'IPAddress' => 'כתובת ה-IP',
		'Frequency' => 'תדר',
		'IM' => 'הודעות מיידיות',
		'NewAttribute' => 'התכונה החדשה',
		'AttributeCode' => 'תכונת קוד',
		'OptionalFieldsSetup' => 'הגדרת התכונות נוסף',
		'URLPhoto' => 'URL של תמונה / לוגו',
		'SetLinkToThirdParty' => 'קישור לגורם אחר 3',
		'CreateDraft' => 'יצירת טיוטה',
		'ClickToEdit' => 'לחץ כדי לערוך',
		'ObjectDeleted' => '%s אובייקט נמחק',
		'ByCountry' => 'לפי מדינה',
		'ByTown' => 'ידי העיר',
		'ByDate' => 'לפי תאריך',
		'ByMonthYear' => 'לפי חודש / שנה',
		'ByYear' => 'לפי שנה',
		'ByMonth' => 'לפי חודש',
		'ByDay' => 'במשך היום',
		'BySalesRepresentative' => 'על ידי נציג המכירות',
		'LinkedToSpecificUsers' => 'Linked to a particular user contact',
		'DeleteAFile' => 'Delete a file',
		'ConfirmDeleteAFile' => 'Are you sure you want to delete file',
		'Create' => 'Créer',
		'Block' => 'Bloquer',
		'Unblock' => 'Débloquer',
		'Weeks' => 'Semaines',
		'To' => 'à',
		'View' => 'Voir',
		// Week day
		'Monday' => 'יום שני',
		'Tuesday' => 'יום שלישי',
		'Wednesday' => 'יום רביעי',
		'Thursday' => 'יום חמישי',
		'Friday' => 'יום שישי',
		'Saturday' => 'יום שבת',
		'Sunday' => 'יום ראשון',
		'MondayMin' => 'מו',
		'TuesdayMin' => 'ט&quot;ו',
		'WednesdayMin' => 'אנו',
		'ThursdayMin' => 'ה',
		'FridayMin' => 'Fr',
		'SaturdayMin' => 'שא',
		'SundayMin' => 'סו',
		'Day1' => 'יום שני',
		'Day2' => 'יום שלישי',
		'Day3' => 'יום רביעי',
		'Day4' => 'יום חמישי',
		'Day5' => 'יום שישי',
		'Day6' => 'יום שבת',
		'Day0' => 'יום ראשון',
		'ShortMonday' => 'M',
		'ShortTuesday' => 'T',
		'ShortWednesday' => 'W',
		'ShortThursday' => 'T',
		'ShortFriday' => 'F',
		'ShortSaturday' => 'S',
		'ShortSunday' => 'S'
);
?>