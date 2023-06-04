## Libraries
Logs is Libraries Cloud Data Center application programming interfaces (API's) that enables you to access data globally service.

#### Information results
The testing file in directory tests


#### Logs
Generate file logs
- `\Libraries\Log::message(message, messageType)`
- parameters
```
**message** string
**messageType** string consist of INFO|WARNING|STAT|TRACE|SPECIAL default INFO
**BASE_DIRECTORY_LOG** define directory file default /storage/logs/
**BASE_MAIL_LOG** define account mail if message type is SPECIAL default logs@mail.com
```
- response 
```
true
```