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

$ldap = array(
		'CHARSET' => 'UTF-8',
		'DomainPassword' => 'Jelszó a domain-hez',
		'YouMustChangePassNextLogon' => '<b>%s</b> felhasználó jelszavát a <b>%s</b> domain-ben meg kell változtatni.',
		'UserMustChangePassNextLogon' => '%s domainben a felhasználónak meg kell változtatnia a jelszavát.',
		'LdapUacf_NORMAL_ACCOUNT' => 'Felhasználói fiók',
		'LdapUacf_DONT_EXPIRE_PASSWORD' => 'A jelszó sosem jár le',
		'LdapUacf_ACCOUNTDISABLE' => '%s domainben a fiók deaktiválva van',
		'LDAPInformationsForThisContact' => 'Információ a kapcsolatról az LDAP adatbázisban',
		'LDAPInformationsForThisUser' => 'Információ a felhasználóról az LDAP adatbázisban',
		'LDAPInformationsForThisGroup' => 'Információ a csoportról az LDAP adatbázisban',
		'LDAPInformationsForThisMember' => 'Információ a tagról az LDAP adatbázisban',
		'LDAPAttribute' => 'LDAP attributum',
		'LDAPAttributes' => 'LDAP attributumok',
		'LDAPCard' => 'LDAP kártya',
		'LDAPRecordNotFound' => 'Rekord nem található az LDAP adatbázisban',
		'LDAPUsers' => 'Felhasználók az LDAP adatbázisban',
		'LDAPGroups' => 'Csoportok az LDAP adatbázisban',
		'LDAPFieldStatus' => 'Állapot',
		'LDAPFieldFirstSubscriptionDate' => 'Első feliratkozási dátum',
		'LDAPFieldFirstSubscriptionAmount' => 'Első feliratkozási mennyiség',
		'LDAPFieldLastSubscriptionDate' => 'Utolsó feliratkozási dátum',
		'LDAPFieldLastSubscriptionAmount' => 'Utolsó feliratkozási mennyiség',
		'SynchronizeDolibarr2Ldap' => 'Felhasználó szinkronizálása (Dolibarr -> LDAP)',
		'UserSynchronized' => 'Felhasználó szinkronizálva',
		'GroupSynchronized' => 'Csoport szinkronizálva',
		'MemberSynchronized' => 'Tag szinkronizálva',
		'ContactSynchronized' => 'Kapcsolat szinkronizálva',
		'ForceSynchronize' => 'Eröltetett szinkronizáció Dolibarr -> LDAP',
		'ErrorFailedToReadLDAP' => 'Nem sikerült olvasni az LDAP adatbázist. Ellenőrizze az LDAP modul beállítását és az adatbázis hozzáférhetőségét.'
);
?>