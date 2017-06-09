# iNew\Rest6_1\CustomerAccountApi

All URIs are relative to *https://10.189.230.165:24024/rest/v6.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crceAccountAdministrationAddBalance**](CustomerAccountApi.md#crceAccountAdministrationAddBalance) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/addBalance | Adds an amount to a balance of a subscriber&#39;s account
[**crceAccountAdministrationCancelReservation**](CustomerAccountApi.md#crceAccountAdministrationCancelReservation) | **DELETE** /customers/{customerAccountId}/subscriptions/{subscriptionId}/reservations/{reservationId}/cancel | cancels a previous reservation made for the subscription
[**crceAccountAdministrationCommitCharge**](CustomerAccountApi.md#crceAccountAdministrationCommitCharge) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/reservations/{reservationId}/commit | commits a previous reservation made for the subscription
[**crceAccountAdministrationCreateReservation**](CustomerAccountApi.md#crceAccountAdministrationCreateReservation) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/reservations | create a reservation for charging a subscription
[**crceAccountAdministrationRefundBalance**](CustomerAccountApi.md#crceAccountAdministrationRefundBalance) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/refundBalance | Refunds an amount from balance on a subscriber&#39;s account
[**crceAccountAdministrationSetBalance**](CustomerAccountApi.md#crceAccountAdministrationSetBalance) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/setBalance | Set an amount as a balance on a subscriber&#39;s account
[**crceAccountGetAccount**](CustomerAccountApi.md#crceAccountGetAccount) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/accounts/{accountId} | returns the account for the given subscription and accountId
[**crceAccountGetAccountCurrencySummary**](CustomerAccountApi.md#crceAccountGetAccountCurrencySummary) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/accounts/currency/{currency}/summary | returns the account summary for the given subscription and currency
[**crceAccountGetAccounts**](CustomerAccountApi.md#crceAccountGetAccounts) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/accounts | returns the accounts for the given subscription
[**crceAccountGetAccountsSummary**](CustomerAccountApi.md#crceAccountGetAccountsSummary) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/accounts/summary | returns the accounts summary grouped by currency for the given subscription
[**crceAccountGetCurrencyAccounts**](CustomerAccountApi.md#crceAccountGetCurrencyAccounts) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/accounts/currency/{currency} | returns the accounts for the given subscription and currency
[**crceAccountGetMainAccount**](CustomerAccountApi.md#crceAccountGetMainAccount) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/accounts/main | returns the main account for the given subscription
[**crceAccountGetMainAccountSummary**](CustomerAccountApi.md#crceAccountGetMainAccountSummary) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/accounts/main/summary | returns the main account summary for the given subscription
[**crceBundleAdministrationActivate**](CustomerAccountApi.md#crceBundleAdministrationActivate) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableBundles/{bundleCode}/activate | activates the given bundle
[**crceBundleAdministrationDeactivate**](CustomerAccountApi.md#crceBundleAdministrationDeactivate) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles/{bundleCode}/deactivate | deactivates the given bundle
[**crceBundleAdministrationGetActive**](CustomerAccountApi.md#crceBundleAdministrationGetActive) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles | returns the activated bundles for the given parameters
[**crceBundleAdministrationGetAvailable**](CustomerAccountApi.md#crceBundleAdministrationGetAvailable) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableBundles | returns the available bundles
[**crceCostControlDisableCostLimit**](CustomerAccountApi.md#crceCostControlDisableCostLimit) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/costControl/{trafficType}/{zone}/disable | disables cost control for the given parameters
[**crceCostControlGetCostLimitStatus**](CustomerAccountApi.md#crceCostControlGetCostLimitStatus) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/costControl/{trafficType}/{zone} | retrieves the cost control limit status for the given parameters
[**crceCostControlGetCostLimits**](CustomerAccountApi.md#crceCostControlGetCostLimits) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/costControlLimits | retrieves the cost control limits for the given subscription
[**crceCostControlRestoreDefaultCostLimit**](CustomerAccountApi.md#crceCostControlRestoreDefaultCostLimit) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/costControl/{trafficType}/{zone}/restoreProviderDefault | restores the default provider cost control for the given parameters
[**crceCostControlUpdateCostLimit**](CustomerAccountApi.md#crceCostControlUpdateCostLimit) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/costControl/{trafficType}/{zone}/limit/{maxUnits} | updates the cost control limit with the given parameters
[**crceCostControlUpdateCostLimitStatus**](CustomerAccountApi.md#crceCostControlUpdateCostLimitStatus) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/costControl/{trafficType}/{zone}/used/{usedUnits} | updates the cost control used units with the given parameters
[**crceDataControlDisable**](CustomerAccountApi.md#crceDataControlDisable) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/chargedData/disable | Disables the use of charged data services for the subscription
[**crceDataControlEnable**](CustomerAccountApi.md#crceDataControlEnable) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/chargedData/enable | Enables the use of charged data services for the subscription
[**crceDataControlGetPolicy**](CustomerAccountApi.md#crceDataControlGetPolicy) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/chargedData/policy | Returns the current data usage policies for the given subscription
[**crceDataControlGetStatus**](CustomerAccountApi.md#crceDataControlGetStatus) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/chargedData/status | Returns the current status of the data control
[**crceEmergencyLoanGetAvailableLoans**](CustomerAccountApi.md#crceEmergencyLoanGetAvailableLoans) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/loans/available | Returns the loans, which can be requested by the subscriber
[**crceEmergencyLoanGetLoanStatus**](CustomerAccountApi.md#crceEmergencyLoanGetLoanStatus) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/loans/status | Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount
[**crceEmergencyLoanRepayLoan**](CustomerAccountApi.md#crceEmergencyLoanRepayLoan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/loans/repay | Repays (partially or fully) the subscriber’s loan
[**crceEmergencyLoanRequestLoan**](CustomerAccountApi.md#crceEmergencyLoanRequestLoan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/loans/request | Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible
[**crceExternalChargingChargeEvent**](CustomerAccountApi.md#crceExternalChargingChargeEvent) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/event/{key} | charges an event performed by the subscription
[**crceFlexiPlanServiceGetPlanCustomerTemplate**](CustomerAccountApi.md#crceFlexiPlanServiceGetPlanCustomerTemplate) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans/{tariffPlanId}/template | retrieves the plan template for the given flexiplan
[**crceGroupAdministrationAddMember**](CustomerAccountApi.md#crceGroupAdministrationAddMember) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/group/members | adds a member to the group (only works for the admin)
[**crceGroupAdministrationAddMemberCustomer**](CustomerAccountApi.md#crceGroupAdministrationAddMemberCustomer) | **POST** /customers/{customerAccountId}/group/members | adds a member to the group (only works for the admin)
[**crceGroupAdministrationCreate**](CustomerAccountApi.md#crceGroupAdministrationCreate) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/group | creates a group (the given subscription will be the admin)
[**crceGroupAdministrationCreateCustomer**](CustomerAccountApi.md#crceGroupAdministrationCreateCustomer) | **POST** /customers/{customerAccountId}/group | creates a group (the given customer will be the admin)
[**crceGroupAdministrationDelete**](CustomerAccountApi.md#crceGroupAdministrationDelete) | **DELETE** /customers/{customerAccountId}/subscriptions/{subscriptionId}/group | deletes a group (only works for the admin)
[**crceGroupAdministrationDeleteCustomer**](CustomerAccountApi.md#crceGroupAdministrationDeleteCustomer) | **DELETE** /customers/{customerAccountId}/group | deletes a group (only works for the admin)
[**crceGroupAdministrationGet**](CustomerAccountApi.md#crceGroupAdministrationGet) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/group | gets the group details
[**crceGroupAdministrationGetCustomer**](CustomerAccountApi.md#crceGroupAdministrationGetCustomer) | **GET** /customers/{customerAccountId}/group | gets the group details (only works for the admin)
[**crceGroupAdministrationLeave**](CustomerAccountApi.md#crceGroupAdministrationLeave) | **DELETE** /customers/{customerAccountId}/subscriptions/{subscriptionId}/group/leave | leaves the Community group
[**crceGroupAdministrationRemoveMember**](CustomerAccountApi.md#crceGroupAdministrationRemoveMember) | **DELETE** /customers/{customerAccountId}/subscriptions/{subscriptionId}/group/members | removes a member from the group (only works for the admin)
[**crceGroupAdministrationRemoveMemberCustomer**](CustomerAccountApi.md#crceGroupAdministrationRemoveMemberCustomer) | **DELETE** /customers/{customerAccountId}/group/members | removes a member from the group (only works for the admin)
[**crceGroupAdministrationUpdate**](CustomerAccountApi.md#crceGroupAdministrationUpdate) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/group | updates a group (only works for the admin)
[**crceGroupAdministrationUpdateCustomer**](CustomerAccountApi.md#crceGroupAdministrationUpdateCustomer) | **PUT** /customers/{customerAccountId}/group | updates a group (only works for the admin)
[**crceIccaTransferMoney**](CustomerAccountApi.md#crceIccaTransferMoney) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/transferMoney | transfers money to another subscription
[**crceIccaTransferResources**](CustomerAccountApi.md#crceIccaTransferResources) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/transfer | transfers resources to another subscription
[**crceOfflineChargingChargeAdminEvent**](CustomerAccountApi.md#crceOfflineChargingChargeAdminEvent) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/adminEvent | Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands
[**crceOfflineChargingChargeData**](CustomerAccountApi.md#crceOfflineChargingChargeData) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/data | Method designed for charging the data sessions
[**crceOfflineChargingChargeEvent**](CustomerAccountApi.md#crceOfflineChargingChargeEvent) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/event | Method designed for charging the SMS services
[**crceOfflineChargingChargeSession**](CustomerAccountApi.md#crceOfflineChargingChargeSession) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/session | Method designed for charging the MOC, MTC and MFC sessions
[**crceOfflineChargingOfflineCharge**](CustomerAccountApi.md#crceOfflineChargingOfflineCharge) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline | performs offline charging
[**crceOfflineRatingGetDataRating**](CustomerAccountApi.md#crceOfflineRatingGetDataRating) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/data | gets the rating information for data sessions
[**crceOfflineRatingGetEventRating**](CustomerAccountApi.md#crceOfflineRatingGetEventRating) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/event | gets the rating information for events (SMS/MMS)
[**crceOfflineRatingGetRatings**](CustomerAccountApi.md#crceOfflineRatingGetRatings) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline | gets the rating information for all types of traffic and events
[**crceOfflineRatingGetSessionRating**](CustomerAccountApi.md#crceOfflineRatingGetSessionRating) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/charge/offline/session | gets the rating information for voice sessions (MOC/MTC/MFC)
[**crceOnlinePaymentGetRecurringCharges**](CustomerAccountApi.md#crceOnlinePaymentGetRecurringCharges) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId}/recurringCharges | gets recurring charges for the given OnlinePaymentProfile
[**crceOnlinePaymentGetRecurringOnlinePayments**](CustomerAccountApi.md#crceOnlinePaymentGetRecurringOnlinePayments) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/recurringOnlinePayments | gets recurring online payments for the given subscription
[**crceOnlinePaymentGetRecurringOnlinePaymentsCustomer**](CustomerAccountApi.md#crceOnlinePaymentGetRecurringOnlinePaymentsCustomer) | **GET** /customers/{customerAccountId}/recurringOnlinePayments | gets recurring online payments for the given customer
[**crceOnlinePaymentUpdateBundle**](CustomerAccountApi.md#crceOnlinePaymentUpdateBundle) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeBundles/{bundleCode} | updates the payment method for the given bundle
[**crceOnlinePaymentUpdatePlan**](CustomerAccountApi.md#crceOnlinePaymentUpdatePlan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan/{tariffPlanId} | updates the payment method for the given plan
[**crceOverdraftGetOverdraftStatus**](CustomerAccountApi.md#crceOverdraftGetOverdraftStatus) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/overdraft | gets the status of the overdraft functionality for the given subscription
[**crcePoolAdministrationAcceptOffer**](CustomerAccountApi.md#crcePoolAdministrationAcceptOffer) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/acceptOffer/{confirmationCode} | accepts the offer to join the given pool (pool admin or pool user)
[**crcePoolAdministrationCreatePool**](CustomerAccountApi.md#crcePoolAdministrationCreatePool) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools | creates a pool
[**crcePoolAdministrationDeletePool**](CustomerAccountApi.md#crcePoolAdministrationDeletePool) | **DELETE** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId} | deletes a pool
[**crcePoolAdministrationGetPoolDetails**](CustomerAccountApi.md#crcePoolAdministrationGetPoolDetails) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools | gets the pooling status details (pool admin and user)
[**crcePoolAdministrationLeavePool**](CustomerAccountApi.md#crcePoolAdministrationLeavePool) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/leave | leave the given pool (pool user)
[**crcePoolAdministrationOffer**](CustomerAccountApi.md#crcePoolAdministrationOffer) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/sendOffer | sends an offer to join the pool to another subscription (pool admin)
[**crcePoolAdministrationRefuseOffer**](CustomerAccountApi.md#crcePoolAdministrationRefuseOffer) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/refuseOffer | refuse the offer to join the given pool (pool user)
[**crcePoolAdministrationRemoveFromPool**](CustomerAccountApi.md#crcePoolAdministrationRemoveFromPool) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/remove | removes the given subscription from the pool (pool admin)
[**crcePoolAdministrationRevokeOffer**](CustomerAccountApi.md#crcePoolAdministrationRevokeOffer) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/pools/{poolId}/revokeOffer | revokes the offer to join the pool for a subscription (pool admin)
[**crceSubscriberAddFlag**](CustomerAccountApi.md#crceSubscriberAddFlag) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/flags/{flag} | adds a flag to the given subscription
[**crceSubscriberRemoveFlag**](CustomerAccountApi.md#crceSubscriberRemoveFlag) | **DELETE** /customers/{customerAccountId}/subscriptions/{subscriptionId}/flags/{flag} | removes a flag from the given subscription
[**crceSubscriberSearchByCustomer**](CustomerAccountApi.md#crceSubscriberSearchByCustomer) | **GET** /customers/{customerAccountId}/subscriptions | searches for subscription for the given customer
[**crceTariffActivatePlan**](CustomerAccountApi.md#crceTariffActivatePlan) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans/{tariffPlanId}/activate | activates the given plan
[**crceTariffChangeActivateTariff**](CustomerAccountApi.md#crceTariffChangeActivateTariff) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableTariffs/{tariffId}/activate | activates the tariff and charges the tariff change costs
[**crceTariffChangeGetAllAvailable**](CustomerAccountApi.md#crceTariffChangeGetAllAvailable) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableTariffs | returns all available tariff to which the subscription can be changed
[**crceTariffChangeGetAvailable**](CustomerAccountApi.md#crceTariffChangeGetAvailable) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availableTariffs/{tariffId} | returns the cost information for the desired tariff to activate
[**crceTariffDeactivatePlan**](CustomerAccountApi.md#crceTariffDeactivatePlan) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan/{tariffPlanId}/deactivate | deactivates the given plan
[**crceTariffGetActivePlan**](CustomerAccountApi.md#crceTariffGetActivePlan) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activePlan | returns the activated plan for the given parameters
[**crceTariffGetActiveTariff**](CustomerAccountApi.md#crceTariffGetActiveTariff) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/activeTariff | returns the active tariff for the given subscription
[**crceTariffGetAvailablePlansCustomer**](CustomerAccountApi.md#crceTariffGetAvailablePlansCustomer) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/availablePlans | returns the available plans
[**historyHistoryServiceGetHistory**](CustomerAccountApi.md#historyHistoryServiceGetHistory) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/history | returns the history
[**historyHistoryServiceGetHistoryCustomer**](CustomerAccountApi.md#historyHistoryServiceGetHistoryCustomer) | **GET** /customers/{customerAccountId}/history | returns the history
[**lcmCampaignSearchServiceGetEligible**](CustomerAccountApi.md#lcmCampaignSearchServiceGetEligible) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/campaigns | gets the campaigns the subscription is eligible for
[**referralReferralServiceAssign**](CustomerAccountApi.md#referralReferralServiceAssign) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/referrals/assignCode | Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)
[**referralReferralServiceGetStatus**](CustomerAccountApi.md#referralReferralServiceGetStatus) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/referrals | queries the status of the subscription&#39;s referrals, such as its expire date and current amount of usages
[**referralReferralServiceRedeem**](CustomerAccountApi.md#referralReferralServiceRedeem) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/referrals/redeemCode/{referralCode} | Validates the provided referral code and rewards the referral code user and owner
[**referralReferralServiceResend**](CustomerAccountApi.md#referralReferralServiceResend) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/referrals/resendCode | Resends already assigned referral code to the owner via preferred type of notification (SMS or email)
[**snaSubscriberNotificationAdministrationServiceGetNotifications**](CustomerAccountApi.md#snaSubscriberNotificationAdministrationServiceGetNotifications) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notifications | returns the available notifications for the given subscription
[**snaSubscriberNotificationAdministrationServiceSetNotificationPreferences**](CustomerAccountApi.md#snaSubscriberNotificationAdministrationServiceSetNotificationPreferences) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notifications/preferences | sets the notification preferences
[**snaSubscriberNotificationServiceSend**](CustomerAccountApi.md#snaSubscriberNotificationServiceSend) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notifyViaTemplate | sends a notification to the given subscription based on a notification key and parameters
[**snaSubscriberNotificationServiceSendByCategory**](CustomerAccountApi.md#snaSubscriberNotificationServiceSendByCategory) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notify/{channel} | sends a notification to the given subscription with the given contents
[**snaSubscriberNotificationServiceSendImmediate**](CustomerAccountApi.md#snaSubscriberNotificationServiceSendImmediate) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/notify | sends a SMS to the given subscription immediately with the given contents
[**topupTopupServiceCancel**](CustomerAccountApi.md#topupTopupServiceCancel) | **DELETE** /customers/{customerAccountId}/subscriptions/{subscriptionId}/topup/cancel | cancels the topup transaction
[**topupTopupServiceCommit**](CustomerAccountApi.md#topupTopupServiceCommit) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/topup/commit | commits the topup transaction
[**topupTopupServiceInit**](CustomerAccountApi.md#topupTopupServiceInit) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/topup/init | intializes the topup transaction
[**topupTopupServiceQuery**](CustomerAccountApi.md#topupTopupServiceQuery) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/topup/query | queries the status of the topup transaction
[**topupTopupServiceTopup**](CustomerAccountApi.md#topupTopupServiceTopup) | **POST** /customers/{customerAccountId}/subscriptions/{subscriptionId}/topup | performs an instant topup
[**ucpOnlinePaymentProfileCreate**](CustomerAccountApi.md#ucpOnlinePaymentProfileCreate) | **POST** /customers/{customerAccountId}/onlinePaymentProfiles | creates an OnlinePaymentProfile
[**ucpOnlinePaymentProfileDelete**](CustomerAccountApi.md#ucpOnlinePaymentProfileDelete) | **DELETE** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | deletes an OnlinePaymentProfile
[**ucpOnlinePaymentProfileGet**](CustomerAccountApi.md#ucpOnlinePaymentProfileGet) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | gets an OnlinePaymentProfile
[**ucpOnlinePaymentProfileGetOneClick**](CustomerAccountApi.md#ucpOnlinePaymentProfileGetOneClick) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles/oneClick | gets the one click OnlinePaymentProfile
[**ucpOnlinePaymentProfileSearch**](CustomerAccountApi.md#ucpOnlinePaymentProfileSearch) | **GET** /customers/{customerAccountId}/onlinePaymentProfiles | gets all OnlinePaymentProfiles for the given search parameters
[**ucpOnlinePaymentProfileUpdate**](CustomerAccountApi.md#ucpOnlinePaymentProfileUpdate) | **PUT** /customers/{customerAccountId}/onlinePaymentProfiles/{oppId} | updates an OnlinePaymentProfile
[**ucpPaymentMethodCreate**](CustomerAccountApi.md#ucpPaymentMethodCreate) | **POST** /customers/{customerAccountId}/onlinePaymentMethods/creditCards | creates a credit card payment method
[**ucpPaymentMethodDelete**](CustomerAccountApi.md#ucpPaymentMethodDelete) | **DELETE** /customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id} | deletes a credit card payment method
[**ucpPaymentMethodGet**](CustomerAccountApi.md#ucpPaymentMethodGet) | **GET** /customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id} | gets a credit card payment method
[**ucpPaymentMethodSearch**](CustomerAccountApi.md#ucpPaymentMethodSearch) | **GET** /customers/{customerAccountId}/onlinePaymentMethods/creditCards | searches for credit card payment methods
[**ucpPaymentMethodUpdate**](CustomerAccountApi.md#ucpPaymentMethodUpdate) | **PUT** /customers/{customerAccountId}/onlinePaymentMethods/creditCards/{id} | updates a credit card payment method
[**ucpSecurityServiceChangePin**](CustomerAccountApi.md#ucpSecurityServiceChangePin) | **PUT** /customers/{customerAccountId}/security/changePin | changes the pin for the given customerAccountId. Current pin needs to be provided
[**ucpSecurityServiceDisableSecurity**](CustomerAccountApi.md#ucpSecurityServiceDisableSecurity) | **PUT** /customers/{customerAccountId}/security/disable | disables the security info for the given customerAccountId
[**ucpSecurityServiceEnableSecurity**](CustomerAccountApi.md#ucpSecurityServiceEnableSecurity) | **PUT** /customers/{customerAccountId}/security/enable | enables the security info for the given customerAccountId
[**ucpSecurityServiceGetSecurityStatus**](CustomerAccountApi.md#ucpSecurityServiceGetSecurityStatus) | **GET** /customers/{customerAccountId}/security/status | gets the security status for the given customerAccountId
[**ucpSecurityServiceInitialPinSetup**](CustomerAccountApi.md#ucpSecurityServiceInitialPinSetup) | **POST** /customers/{customerAccountId}/security/initialPinSetup | sets up the pin for the given customerAccountId for the first time
[**ucpSecurityServiceResetPin**](CustomerAccountApi.md#ucpSecurityServiceResetPin) | **PUT** /customers/{customerAccountId}/security/resetPin | resets the pin for the given customerAccountId
[**ucpSecurityServiceVerifyPin**](CustomerAccountApi.md#ucpSecurityServiceVerifyPin) | **GET** /customers/{customerAccountId}/security/verifyPin | verifies the pin for the given customerAccountId
[**vmsSubscriberServiceGetSubscriberBoxState**](CustomerAccountApi.md#vmsSubscriberServiceGetSubscriberBoxState) | **GET** /customers/{customerAccountId}/subscriptions/{subscriptionId}/voiceMail/state | retrieves the voice mail box state
[**vmsSubscriberServiceSetSubscriberBoxState**](CustomerAccountApi.md#vmsSubscriberServiceSetSubscriberBoxState) | **PUT** /customers/{customerAccountId}/subscriptions/{subscriptionId}/voiceMail/state/{newState} | sets the voice mail box state


# **crceAccountAdministrationAddBalance**
> \iNew\Rest6_1\Model\AddBalanceResponse crceAccountAdministrationAddBalance($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

Adds an amount to a balance of a subscriber's account

**Access Restriction:** CRM  **Operation ID:** crce::AccountAdministration::AddBalance  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Adds an amount to a balance of a subscriber's account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\BalanceModificationParametersCreate(); // \iNew\Rest6_1\Model\BalanceModificationParametersCreate | 
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountAdministrationAddBalance($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountAdministrationAddBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\BalanceModificationParametersCreate**](../Model/\iNew\Rest6_1\Model\BalanceModificationParametersCreate.md)|  |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\AddBalanceResponse**](../Model/AddBalanceResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountAdministrationCancelReservation**
> \iNew\Rest6_1\Model\CancelReservationResponse crceAccountAdministrationCancelReservation($customer_account_id, $subscription_id, $reservation_id, $correlation_id, $transaction_id, $user)

cancels a previous reservation made for the subscription

**Access Restriction:** OPERATIONS  **Operation ID:** crce::AccountAdministration::CancelReservation  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   cancels a previous reservation made for the subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$reservation_id = "reservation_id_example"; // string | the reservation Id returned by the create reservation method
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountAdministrationCancelReservation($customer_account_id, $subscription_id, $reservation_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountAdministrationCancelReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **reservation_id** | **string**| the reservation Id returned by the create reservation method |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CancelReservationResponse**](../Model/CancelReservationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountAdministrationCommitCharge**
> \iNew\Rest6_1\Model\CommitReservationResponse crceAccountAdministrationCommitCharge($customer_account_id, $subscription_id, $reservation_id, $correlation_id, $transaction_id, $user, $purpose)

commits a previous reservation made for the subscription

**Access Restriction:** OPERATIONS  **Operation ID:** crce::AccountAdministration::CommitCharge  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   commits a previous reservation made for the subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$reservation_id = "reservation_id_example"; // string | the reservation Id returned by the create reservation method
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$purpose = "purpose_example"; // string | the purpose for the charge being commited

try {
    $result = $api_instance->crceAccountAdministrationCommitCharge($customer_account_id, $subscription_id, $reservation_id, $correlation_id, $transaction_id, $user, $purpose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountAdministrationCommitCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **reservation_id** | **string**| the reservation Id returned by the create reservation method |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **purpose** | **string**| the purpose for the charge being commited | [optional]

### Return type

[**\iNew\Rest6_1\Model\CommitReservationResponse**](../Model/CommitReservationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountAdministrationCreateReservation**
> \iNew\Rest6_1\Model\CreateReservationResponse crceAccountAdministrationCreateReservation($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

create a reservation for charging a subscription

**Access Restriction:** CRM  **Operation ID:** crce::AccountAdministration::CreateReservation  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   create a reservation for charging a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\CreateReservationParameters(); // \iNew\Rest6_1\Model\CreateReservationParameters | 
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountAdministrationCreateReservation($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountAdministrationCreateReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\CreateReservationParameters**](../Model/\iNew\Rest6_1\Model\CreateReservationParameters.md)|  |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreateReservationResponse**](../Model/CreateReservationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountAdministrationRefundBalance**
> \iNew\Rest6_1\Model\RefundBalanceResponse crceAccountAdministrationRefundBalance($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

Refunds an amount from balance on a subscriber's account

**Access Restriction:** CRM  **Operation ID:** crce::AccountAdministration::RefundBalance  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Refunds an amount from balance on a subscriber's account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\RefundBalanceParametersCreate(); // \iNew\Rest6_1\Model\RefundBalanceParametersCreate | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountAdministrationRefundBalance($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountAdministrationRefundBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\RefundBalanceParametersCreate**](../Model/\iNew\Rest6_1\Model\RefundBalanceParametersCreate.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RefundBalanceResponse**](../Model/RefundBalanceResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountAdministrationSetBalance**
> \iNew\Rest6_1\Model\SetBalanceResponse crceAccountAdministrationSetBalance($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

Set an amount as a balance on a subscriber's account

**Access Restriction:** OPERATIONS  **Operation ID:** crce::AccountAdministration::SetBalance  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Set an amount as a balance on a subscriber's account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\BalanceModificationParametersSet(); // \iNew\Rest6_1\Model\BalanceModificationParametersSet | 
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountAdministrationSetBalance($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountAdministrationSetBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\BalanceModificationParametersSet**](../Model/\iNew\Rest6_1\Model\BalanceModificationParametersSet.md)|  |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SetBalanceResponse**](../Model/SetBalanceResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountGetAccount**
> \iNew\Rest6_1\Model\GetAccountResponse crceAccountGetAccount($customer_account_id, $subscription_id, $account_id, $correlation_id, $transaction_id, $user)

returns the account for the given subscription and accountId

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Account::GetAccount  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the account for the given subscription and accountId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$account_id = 789; // int | the accountId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountGetAccount($customer_account_id, $subscription_id, $account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountGetAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **account_id** | **int**| the accountId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccountResponse**](../Model/GetAccountResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountGetAccountCurrencySummary**
> \iNew\Rest6_1\Model\GetAccountSummaryResponse crceAccountGetAccountCurrencySummary($customer_account_id, $subscription_id, $currency, $correlation_id, $transaction_id, $user)

returns the account summary for the given subscription and currency

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Account::GetAccountCurrencySummary  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the account summary for the given subscription and currency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$currency = "currency_example"; // string | the currency
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountGetAccountCurrencySummary($customer_account_id, $subscription_id, $currency, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountGetAccountCurrencySummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **currency** | **string**| the currency |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccountSummaryResponse**](../Model/GetAccountSummaryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountGetAccounts**
> \iNew\Rest6_1\Model\GetAccountsResponse crceAccountGetAccounts($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the accounts for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Account::GetAccounts  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the accounts for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceAccountGetAccounts($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountGetAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccountsResponse**](../Model/GetAccountsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountGetAccountsSummary**
> \iNew\Rest6_1\Model\GetAccountsSummaryResponse crceAccountGetAccountsSummary($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $currency_group, $entities_per_page, $page)

returns the accounts summary grouped by currency for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Account::GetAccountsSummary  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the accounts summary grouped by currency for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$currency_group = "currency_group_example"; // string | the currencyGroup
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceAccountGetAccountsSummary($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $currency_group, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountGetAccountsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **currency_group** | **string**| the currencyGroup | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccountsSummaryResponse**](../Model/GetAccountsSummaryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountGetCurrencyAccounts**
> \iNew\Rest6_1\Model\GetAccountsResponse crceAccountGetCurrencyAccounts($customer_account_id, $subscription_id, $currency, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the accounts for the given subscription and currency

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Account::GetCurrencyAccounts  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the accounts for the given subscription and currency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$currency = "currency_example"; // string | the currency
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceAccountGetCurrencyAccounts($customer_account_id, $subscription_id, $currency, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountGetCurrencyAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **currency** | **string**| the currency |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccountsResponse**](../Model/GetAccountsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountGetMainAccount**
> \iNew\Rest6_1\Model\GetAccountResponse crceAccountGetMainAccount($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

returns the main account for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Account::GetMainAccount  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the main account for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountGetMainAccount($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountGetMainAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccountResponse**](../Model/GetAccountResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceAccountGetMainAccountSummary**
> \iNew\Rest6_1\Model\GetAccountSummaryResponse crceAccountGetMainAccountSummary($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

returns the main account summary for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Account::GetMainAccountSummary  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the main account summary for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceAccountGetMainAccountSummary($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceAccountGetMainAccountSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAccountSummaryResponse**](../Model/GetAccountSummaryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationActivate**
> \iNew\Rest6_1\Model\ActivateBundleResponse crceBundleAdministrationActivate($customer_account_id, $subscription_id, $bundle_code, $correlation_id, $pin, $transaction_id, $user, $opp_id)

activates the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::Activate  **Possible response codes:**   -1 - in progress (successful HTTP Status 200)   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   activates the given bundle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundle code identifying the bundle that should be activated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$opp_id = 789; // int | the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment

try {
    $result = $api_instance->crceBundleAdministrationActivate($customer_account_id, $subscription_id, $bundle_code, $correlation_id, $pin, $transaction_id, $user, $opp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceBundleAdministrationActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundle code identifying the bundle that should be activated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **opp_id** | **int**| the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment | [optional]

### Return type

[**\iNew\Rest6_1\Model\ActivateBundleResponse**](../Model/ActivateBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationDeactivate**
> \iNew\Rest6_1\Model\DeactivateBundleResponse crceBundleAdministrationDeactivate($customer_account_id, $subscription_id, $bundle_code, $correlation_id, $transaction_id, $user)

deactivates the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::Deactivate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   deactivates the given bundle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundleCode identifying the bundle that should be deactivated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceBundleAdministrationDeactivate($customer_account_id, $subscription_id, $bundle_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceBundleAdministrationDeactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundleCode identifying the bundle that should be deactivated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeactivateBundleResponse**](../Model/DeactivateBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGetActive**
> \iNew\Rest6_1\Model\GetActivatedBundlesResponse crceBundleAdministrationGetActive($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $bundle_code)

returns the activated bundles for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::GetActive  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the activated bundles for the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$bundle_code = "bundle_code_example"; // string | the bundle code, if provided the result will be filtered to only show bundles with the provided bundle code

try {
    $result = $api_instance->crceBundleAdministrationGetActive($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $bundle_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceBundleAdministrationGetActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **bundle_code** | **string**| the bundle code, if provided the result will be filtered to only show bundles with the provided bundle code | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetActivatedBundlesResponse**](../Model/GetActivatedBundlesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceBundleAdministrationGetAvailable**
> \iNew\Rest6_1\Model\GetAvailableBundlesResponse crceBundleAdministrationGetAvailable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $payment_option)

returns the available bundles

**Access Restriction:** SELF_CARE  **Operation ID:** crce::BundleAdministration::GetAvailable  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001010001 - the requested action is not supported (client error HTTP Status 400)   1001010002 - bundle maximum limit reached (client error HTTP Status 400)   1001010003 - bundle not activated (client error HTTP Status 400)   1001010004 - bundle not allowed (client error HTTP Status 400)   1001010005 - unknown bundle (client error HTTP Status 400)   1001010006 - unknown bundle group (client error HTTP Status 400)   1001010007 - Indicates that bundle cannot be activated with this activation date as it exceeds one bundle period (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available bundles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$group_code = "group_code_example"; // string | the group code, if provided the result of this request will be filtered to only show bundles for the provided group code
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show bundles which can be paid for with the provided payment method

try {
    $result = $api_instance->crceBundleAdministrationGetAvailable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $group_code, $page, $payment_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceBundleAdministrationGetAvailable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **group_code** | **string**| the group code, if provided the result of this request will be filtered to only show bundles for the provided group code | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show bundles which can be paid for with the provided payment method | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableBundlesResponse**](../Model/GetAvailableBundlesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceCostControlDisableCostLimit**
> \iNew\Rest6_1\Model\DisableCostLimitResponse crceCostControlDisableCostLimit($customer_account_id, $subscription_id, $traffic_type, $zone, $correlation_id, $transaction_id, $user)

disables cost control for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::CostControl::DisableCostLimit  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001070001 - the given cost limit parameters are unknown (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   disables cost control for the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$traffic_type = "traffic_type_example"; // string | the trafficType for the cost control limitation
$zone = "zone_example"; // string | the zone for cost control limitation
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceCostControlDisableCostLimit($customer_account_id, $subscription_id, $traffic_type, $zone, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceCostControlDisableCostLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **traffic_type** | **string**| the trafficType for the cost control limitation |
 **zone** | **string**| the zone for cost control limitation |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DisableCostLimitResponse**](../Model/DisableCostLimitResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceCostControlGetCostLimitStatus**
> \iNew\Rest6_1\Model\GetCostLimitStatusResponse crceCostControlGetCostLimitStatus($customer_account_id, $subscription_id, $traffic_type, $zone, $correlation_id, $transaction_id, $user)

retrieves the cost control limit status for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::CostControl::GetCostLimitStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001070001 - the given cost limit parameters are unknown (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   retrieves the cost control limit status for the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$traffic_type = "traffic_type_example"; // string | the trafficType for the cost control limitation
$zone = "zone_example"; // string | the zone for cost control limitation
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceCostControlGetCostLimitStatus($customer_account_id, $subscription_id, $traffic_type, $zone, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceCostControlGetCostLimitStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **traffic_type** | **string**| the trafficType for the cost control limitation |
 **zone** | **string**| the zone for cost control limitation |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetCostLimitStatusResponse**](../Model/GetCostLimitStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceCostControlGetCostLimits**
> \iNew\Rest6_1\Model\GetCostLimitsResponse crceCostControlGetCostLimits($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

retrieves the cost control limits for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::CostControl::GetCostLimits  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001070001 - the given cost limit parameters are unknown (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   retrieves the cost control limits for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceCostControlGetCostLimits($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceCostControlGetCostLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetCostLimitsResponse**](../Model/GetCostLimitsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceCostControlRestoreDefaultCostLimit**
> \iNew\Rest6_1\Model\RestoreDefaultCostLimitResponse crceCostControlRestoreDefaultCostLimit($customer_account_id, $subscription_id, $traffic_type, $zone, $correlation_id, $transaction_id, $user)

restores the default provider cost control for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::CostControl::RestoreDefaultCostLimit  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001070001 - the given cost limit parameters are unknown (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   restores the default provider cost control for the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$traffic_type = "traffic_type_example"; // string | the trafficType for the cost control limitation
$zone = "zone_example"; // string | the zone for cost control limitation
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceCostControlRestoreDefaultCostLimit($customer_account_id, $subscription_id, $traffic_type, $zone, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceCostControlRestoreDefaultCostLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **traffic_type** | **string**| the trafficType for the cost control limitation |
 **zone** | **string**| the zone for cost control limitation |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RestoreDefaultCostLimitResponse**](../Model/RestoreDefaultCostLimitResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceCostControlUpdateCostLimit**
> \iNew\Rest6_1\Model\UpdateCostLimitResponse crceCostControlUpdateCostLimit($customer_account_id, $subscription_id, $traffic_type, $zone, $max_units, $correlation_id, $transaction_id, $user)

updates the cost control limit with the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::CostControl::UpdateCostLimit  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001070001 - the given cost limit parameters are unknown (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates the cost control limit with the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$traffic_type = "traffic_type_example"; // string | the trafficType for the cost control limitation
$zone = "zone_example"; // string | the zone for cost control limitation
$max_units = 789; // int | limit in smallest units of main currency which subscription cannot exceed for the traffic and zone types
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceCostControlUpdateCostLimit($customer_account_id, $subscription_id, $traffic_type, $zone, $max_units, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceCostControlUpdateCostLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **traffic_type** | **string**| the trafficType for the cost control limitation |
 **zone** | **string**| the zone for cost control limitation |
 **max_units** | **int**| limit in smallest units of main currency which subscription cannot exceed for the traffic and zone types |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateCostLimitResponse**](../Model/UpdateCostLimitResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceCostControlUpdateCostLimitStatus**
> \iNew\Rest6_1\Model\UpdateCostLimitStatusResponse crceCostControlUpdateCostLimitStatus($customer_account_id, $subscription_id, $traffic_type, $zone, $used_units, $correlation_id, $transaction_id, $user)

updates the cost control used units with the given parameters

**Access Restriction:** CUSTOMIZATION  **Operation ID:** crce::CostControl::UpdateCostLimitStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001070001 - the given cost limit parameters are unknown (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates the cost control used units with the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$traffic_type = "traffic_type_example"; // string | the trafficType for the cost control limitation
$zone = "zone_example"; // string | the zone for cost control limitation
$used_units = 789; // int | the used units in smallest unit of main currency which the subscription already used for the traffic and zone types
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceCostControlUpdateCostLimitStatus($customer_account_id, $subscription_id, $traffic_type, $zone, $used_units, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceCostControlUpdateCostLimitStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **traffic_type** | **string**| the trafficType for the cost control limitation |
 **zone** | **string**| the zone for cost control limitation |
 **used_units** | **int**| the used units in smallest unit of main currency which the subscription already used for the traffic and zone types |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateCostLimitStatusResponse**](../Model/UpdateCostLimitStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceDataControlDisable**
> \iNew\Rest6_1\Model\DataControlResponse crceDataControlDisable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Disables the use of charged data services for the subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::DataControl::Disable  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001130001 - the data control policy is not configured for given subscriber (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Disables the use of charged data services for the subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceDataControlDisable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceDataControlDisable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DataControlResponse**](../Model/DataControlResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceDataControlEnable**
> \iNew\Rest6_1\Model\DataControlResponse crceDataControlEnable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Enables the use of charged data services for the subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::DataControl::Enable  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001130001 - the data control policy is not configured for given subscriber (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Enables the use of charged data services for the subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceDataControlEnable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceDataControlEnable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DataControlResponse**](../Model/DataControlResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceDataControlGetPolicy**
> \iNew\Rest6_1\Model\PolicyControlResponse crceDataControlGetPolicy($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Returns the current data usage policies for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::DataControl::GetPolicy  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001130001 - the data control policy is not configured for given subscriber (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the current data usage policies for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceDataControlGetPolicy($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceDataControlGetPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\PolicyControlResponse**](../Model/PolicyControlResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceDataControlGetStatus**
> \iNew\Rest6_1\Model\DataControlResponse crceDataControlGetStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Returns the current status of the data control

**Access Restriction:** SELF_CARE  **Operation ID:** crce::DataControl::GetStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001130001 - the data control policy is not configured for given subscriber (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the current status of the data control

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceDataControlGetStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceDataControlGetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DataControlResponse**](../Model/DataControlResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanGetAvailableLoans**
> \iNew\Rest6_1\Model\GetAvailableLoansResponse crceEmergencyLoanGetAvailableLoans($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Returns the loans, which can be requested by the subscriber

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::GetAvailableLoans  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the loans, which can be requested by the subscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanGetAvailableLoans($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceEmergencyLoanGetAvailableLoans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableLoansResponse**](../Model/GetAvailableLoansResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanGetLoanStatus**
> \iNew\Rest6_1\Model\GetLoanStatusResponse crceEmergencyLoanGetLoanStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::GetLoanStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns the status of the loan for a specific subscriber, including loaned amount, already repayed amount and outstanding amount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanGetLoanStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceEmergencyLoanGetLoanStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetLoanStatusResponse**](../Model/GetLoanStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanRepayLoan**
> \iNew\Rest6_1\Model\LoanRepayResponse crceEmergencyLoanRepayLoan($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

Repays (partially or fully) the subscriber’s loan

**Access Restriction:** CRM  **Operation ID:** crce::EmergencyLoan::RepayLoan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Repays (partially or fully) the subscriber’s loan. Both those successful responses have the following response codes: partially paid 1001120004 and fully paid 1001120005

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\LoanParameters(); // \iNew\Rest6_1\Model\LoanParameters | 
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceEmergencyLoanRepayLoan($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceEmergencyLoanRepayLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\LoanParameters**](../Model/\iNew\Rest6_1\Model\LoanParameters.md)|  |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\LoanRepayResponse**](../Model/LoanRepayResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceEmergencyLoanRequestLoan**
> \iNew\Rest6_1\Model\LoanRequestResponse crceEmergencyLoanRequestLoan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $parameters)

Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible

**Access Restriction:** SELF_CARE  **Operation ID:** crce::EmergencyLoan::RequestLoan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001120001 - the given subscriber identifier is not valid value (client error HTTP Status 400)   1001120002 - the given service type is not valid value (client error HTTP Status 400)   1001120003 - the given request is misplaced (client error HTTP Status 400)   1001120004 - the given the loan was partially repayed. (successful HTTP Status 200)   1001120005 - the given the loan was fully repaid. (successful HTTP Status 200)   1001120006 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1001120007 - the given subscriber does not have a loan to repay. (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Requests the loan for a subscriber with as much amount the subscribers balance and profile is credible

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$parameters = new \iNew\Rest6_1\Model\LoanParameters(); // \iNew\Rest6_1\Model\LoanParameters | if provided the given amount will be requested, otherwise the default amount defined in the Tariff will be requested

try {
    $result = $api_instance->crceEmergencyLoanRequestLoan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceEmergencyLoanRequestLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **parameters** | [**\iNew\Rest6_1\Model\LoanParameters**](../Model/\iNew\Rest6_1\Model\LoanParameters.md)| if provided the given amount will be requested, otherwise the default amount defined in the Tariff will be requested | [optional]

### Return type

[**\iNew\Rest6_1\Model\LoanRequestResponse**](../Model/LoanRequestResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceExternalChargingChargeEvent**
> \iNew\Rest6_1\Model\ChargeEventResponse crceExternalChargingChargeEvent($customer_account_id, $subscription_id, $key, $correlation_id, $transaction_id, $user)

charges an event performed by the subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::ExternalCharging::ChargeEvent  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   charges an event performed by the subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$key = "key_example"; // string | the event key identifying the event to be charged
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceExternalChargingChargeEvent($customer_account_id, $subscription_id, $key, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceExternalChargingChargeEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **key** | **string**| the event key identifying the event to be charged |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ChargeEventResponse**](../Model/ChargeEventResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceFlexiPlanServiceGetPlanCustomerTemplate**
> \iNew\Rest6_1\Model\GetPlanTemplateResponse crceFlexiPlanServiceGetPlanCustomerTemplate($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user)

retrieves the plan template for the given flexiplan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::FlexiPlanService::GetPlanCustomerTemplate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1038000001 - missing provider id (client error HTTP Status 400)   1038000002 - missing mandatory arguments in request (client error HTTP Status 400)   1038000003 - Database error (server error HTTP Status 500)   1038000004 - unknown subscription (client error HTTP Status 400)   1038000005 - service is unavailable (server error HTTP Status 500)   1038000006 - calculation problem (client error HTTP Status 400)   1038000007 - invalid plan (client error HTTP Status 400)   1038000008 - missing plan id (client error HTTP Status 400)   1038000009 - currency not found in CRCE (server error HTTP Status 500)   1038000010 - currency lookup failure in CRCE (server error HTTP Status 500)   1038000011 - invalid subscriber state (client error HTTP Status 400)   1038000012 - insufficient funds (client error HTTP Status 400)   1038000013 - plan already activated (client error HTTP Status 400)   1038000014 - quota limit exceeded (client error HTTP Status 400)   1038000015 - invalid arguments in CRCE (client error HTTP Status 400)   1038000016 - invalid plan definition (client error HTTP Status 400)   1038000017 - subscriber already pooled (client error HTTP Status 400)   1038000018 - unknown counter in CRCE (client error HTTP Status 400)   1038000019 - unknown tariff (client error HTTP Status 400)   1038000020 - unknown provider (client error HTTP Status 400)   1038000021 - unknown location in CRCE (client error HTTP Status 400)   1038000022 - database error in CRCE (client error HTTP Status 400)  **Notes:**   Provides detailed information about flexi-plan with all selectable quota ranges and available quota combinations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the planId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceFlexiPlanServiceGetPlanCustomerTemplate($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceFlexiPlanServiceGetPlanCustomerTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the planId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPlanTemplateResponse**](../Model/GetPlanTemplateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationAddMember**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationAddMember($customer_account_id, $subscription_id, $member, $correlation_id, $transaction_id, $user)

adds a member to the group (only works for the admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::GroupAdministration::AddMember  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   adds a member to the group (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$member = new \iNew\Rest6_1\Model\SubscriptionIdentifierCreate(); // \iNew\Rest6_1\Model\SubscriptionIdentifierCreate | the subscription to add to the group, providing any one of the identifying aspects is sufficient
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationAddMember($customer_account_id, $subscription_id, $member, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationAddMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **member** | [**\iNew\Rest6_1\Model\SubscriptionIdentifierCreate**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifierCreate.md)| the subscription to add to the group, providing any one of the identifying aspects is sufficient |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationAddMemberCustomer**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationAddMemberCustomer($customer_account_id, $member, $correlation_id, $transaction_id, $user)

adds a member to the group (only works for the admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::GroupAdministration::AddMemberCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   adds a member to the group (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$member = new \iNew\Rest6_1\Model\SubscriptionIdentifierCreate(); // \iNew\Rest6_1\Model\SubscriptionIdentifierCreate | the subscription to add to the group, providing any one of the identifying aspects is sufficient
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationAddMemberCustomer($customer_account_id, $member, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationAddMemberCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **member** | [**\iNew\Rest6_1\Model\SubscriptionIdentifierCreate**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifierCreate.md)| the subscription to add to the group, providing any one of the identifying aspects is sufficient |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationCreate**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationCreate($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $name)

creates a group (the given subscription will be the admin)

**Access Restriction:** CRM  **Operation ID:** crce::GroupAdministration::Create  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   creates a group (the given subscription will be the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$name = "name_example"; // string | the name of the group

try {
    $result = $api_instance->crceGroupAdministrationCreate($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **name** | **string**| the name of the group | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationCreateCustomer**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationCreateCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $name)

creates a group (the given customer will be the admin)

**Access Restriction:** CRM  **Operation ID:** crce::GroupAdministration::CreateCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   creates a group (the given customer will be the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$name = "name_example"; // string | the name of the group

try {
    $result = $api_instance->crceGroupAdministrationCreateCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationCreateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **name** | **string**| the name of the group | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationDelete**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationDelete($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

deletes a group (only works for the admin)

**Access Restriction:** CRM  **Operation ID:** crce::GroupAdministration::Delete  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   deletes a group (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationDelete($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationDeleteCustomer**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationDeleteCustomer($customer_account_id, $correlation_id, $transaction_id, $user)

deletes a group (only works for the admin)

**Access Restriction:** CRM  **Operation ID:** crce::GroupAdministration::DeleteCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   deletes a group (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationDeleteCustomer($customer_account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationDeleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationGet**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationGet($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

gets the group details

**Access Restriction:** SELF_CARE  **Operation ID:** crce::GroupAdministration::Get  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the group details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationGet($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationGetCustomer**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationGetCustomer($customer_account_id, $correlation_id, $transaction_id, $user)

gets the group details (only works for the admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::GroupAdministration::GetCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the group details (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationGetCustomer($customer_account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationGetCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationLeave**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationLeave($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

leaves the Community group

**Access Restriction:** SELF_CARE  **Operation ID:** crce::GroupAdministration::Leave  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   leaves the Community group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationLeave($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationRemoveMember**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationRemoveMember($customer_account_id, $subscription_id, $member, $correlation_id, $transaction_id, $user)

removes a member from the group (only works for the admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::GroupAdministration::RemoveMember  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   removes a member from the group (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$member = new \iNew\Rest6_1\Model\SubscriptionIdentifierCreate(); // \iNew\Rest6_1\Model\SubscriptionIdentifierCreate | the subscription to remove from the group, providing any one of the identifying aspects is sufficient
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationRemoveMember($customer_account_id, $subscription_id, $member, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationRemoveMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **member** | [**\iNew\Rest6_1\Model\SubscriptionIdentifierCreate**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifierCreate.md)| the subscription to remove from the group, providing any one of the identifying aspects is sufficient |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationRemoveMemberCustomer**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationRemoveMemberCustomer($customer_account_id, $member, $correlation_id, $transaction_id, $user)

removes a member from the group (only works for the admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::GroupAdministration::RemoveMemberCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   removes a member from the group (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$member = new \iNew\Rest6_1\Model\SubscriptionIdentifierCreate(); // \iNew\Rest6_1\Model\SubscriptionIdentifierCreate | the subscription to remove from the group, providing any one of the identifying aspects is sufficient
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationRemoveMemberCustomer($customer_account_id, $member, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationRemoveMemberCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **member** | [**\iNew\Rest6_1\Model\SubscriptionIdentifierCreate**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifierCreate.md)| the subscription to remove from the group, providing any one of the identifying aspects is sufficient |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationUpdate**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationUpdate($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

updates a group (only works for the admin)

**Access Restriction:** CRM  **Operation ID:** crce::GroupAdministration::Update  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates a group (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\UpdateGroupDtoUpdate(); // \iNew\Rest6_1\Model\UpdateGroupDtoUpdate | the parameters to update the group with
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationUpdate($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\UpdateGroupDtoUpdate**](../Model/\iNew\Rest6_1\Model\UpdateGroupDtoUpdate.md)| the parameters to update the group with |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceGroupAdministrationUpdateCustomer**
> \iNew\Rest6_1\Model\GroupResponseWrapper crceGroupAdministrationUpdateCustomer($customer_account_id, $parameters, $correlation_id, $transaction_id, $user)

updates a group (only works for the admin)

**Access Restriction:** CRM  **Operation ID:** crce::GroupAdministration::UpdateCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001090001 - Unknown group (client error HTTP Status 400)   1001090002 - Administrator already present (client error HTTP Status 400)   1001090003 - Group already present (client error HTTP Status 400)   1001090004 - Group occupied (client error HTTP Status 400)   1001090005 - Member already present (client error HTTP Status 400)   1001090006 - Member not present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates a group (only works for the admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$parameters = new \iNew\Rest6_1\Model\UpdateGroupDtoUpdate(); // \iNew\Rest6_1\Model\UpdateGroupDtoUpdate | the parameters to update the group with
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceGroupAdministrationUpdateCustomer($customer_account_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceGroupAdministrationUpdateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **parameters** | [**\iNew\Rest6_1\Model\UpdateGroupDtoUpdate**](../Model/\iNew\Rest6_1\Model\UpdateGroupDtoUpdate.md)| the parameters to update the group with |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GroupResponseWrapper**](../Model/GroupResponseWrapper.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceIccaTransferMoney**
> \iNew\Rest6_1\Model\ResourceTransferResponse crceIccaTransferMoney($customer_account_id, $subscription_id, $parameters, $correlation_id, $pin, $transaction_id, $user)

transfers money to another subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Icca::TransferMoney  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001030001 - maximum transfer amount is exceeded (client error HTTP Status 400)   1001030002 - remaining balance is too low (client error HTTP Status 400)   1001030003 - transfer amount is too low (client error HTTP Status 400)   1001030004 - the maximmum allowed amount on the monetary account is reached (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   transfers money to another subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\TransferParametersCreate(); // \iNew\Rest6_1\Model\TransferParametersCreate | the parameters of the transfer
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceIccaTransferMoney($customer_account_id, $subscription_id, $parameters, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceIccaTransferMoney: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\TransferParametersCreate**](../Model/\iNew\Rest6_1\Model\TransferParametersCreate.md)| the parameters of the transfer |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ResourceTransferResponse**](../Model/ResourceTransferResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceIccaTransferResources**
> \iNew\Rest6_1\Model\ResourceTransferResponse crceIccaTransferResources($customer_account_id, $subscription_id, $parameters, $correlation_id, $pin, $transaction_id, $user)

transfers resources to another subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Icca::TransferResources  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001030001 - maximum transfer amount is exceeded (client error HTTP Status 400)   1001030002 - remaining balance is too low (client error HTTP Status 400)   1001030003 - transfer amount is too low (client error HTTP Status 400)   1001030004 - the maximmum allowed amount on the monetary account is reached (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   transfers resources to another subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\TransferParametersCreate(); // \iNew\Rest6_1\Model\TransferParametersCreate | the parameters of the transfer
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceIccaTransferResources($customer_account_id, $subscription_id, $parameters, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceIccaTransferResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\TransferParametersCreate**](../Model/\iNew\Rest6_1\Model\TransferParametersCreate.md)| the parameters of the transfer |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ResourceTransferResponse**](../Model/ResourceTransferResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeAdminEvent**
> \iNew\Rest6_1\Model\AdminEventChargeResponse crceOfflineChargingChargeAdminEvent($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeAdminEvent  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging various types of admin events, such as USSD, IVR actions or CRM commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\AdminEventChargingParameters(); // \iNew\Rest6_1\Model\AdminEventChargingParameters | Admin Event Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeAdminEvent($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineChargingChargeAdminEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\AdminEventChargingParameters**](../Model/\iNew\Rest6_1\Model\AdminEventChargingParameters.md)| Admin Event Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\AdminEventChargeResponse**](../Model/AdminEventChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeData**
> \iNew\Rest6_1\Model\DataChargeResponse crceOfflineChargingChargeData($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the data sessions

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeData  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the data sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\DataChargingParameters(); // \iNew\Rest6_1\Model\DataChargingParameters | Data Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeData($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineChargingChargeData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\DataChargingParameters**](../Model/\iNew\Rest6_1\Model\DataChargingParameters.md)| Data Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DataChargeResponse**](../Model/DataChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeEvent**
> \iNew\Rest6_1\Model\EventChargeResponse crceOfflineChargingChargeEvent($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the SMS services

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeEvent  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the SMS services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\EventChargingParameters(); // \iNew\Rest6_1\Model\EventChargingParameters | Event Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeEvent($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineChargingChargeEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\EventChargingParameters**](../Model/\iNew\Rest6_1\Model\EventChargingParameters.md)| Event Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\EventChargeResponse**](../Model/EventChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingChargeSession**
> \iNew\Rest6_1\Model\SessionChargeResponse crceOfflineChargingChargeSession($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user)

Method designed for charging the MOC, MTC and MFC sessions

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::ChargeSession  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Method designed for charging the MOC, MTC and MFC sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$charging_parameters = new \iNew\Rest6_1\Model\SessionChargingParameters(); // \iNew\Rest6_1\Model\SessionChargingParameters | Session Charging Parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingChargeSession($customer_account_id, $subscription_id, $charging_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineChargingChargeSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **charging_parameters** | [**\iNew\Rest6_1\Model\SessionChargingParameters**](../Model/\iNew\Rest6_1\Model\SessionChargingParameters.md)| Session Charging Parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SessionChargeResponse**](../Model/SessionChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineChargingOfflineCharge**
> \iNew\Rest6_1\Model\OfflineChargeResponse crceOfflineChargingOfflineCharge($customer_account_id, $subscription_id, $offline_charge_parameters, $correlation_id, $transaction_id, $user)

performs offline charging

**Access Restriction:** OPERATIONS  **Operation ID:** crce::OfflineCharging::OfflineCharge  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   performs offline charging

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$offline_charge_parameters = new \iNew\Rest6_1\Model\OfflineChargeParametersCharge(); // \iNew\Rest6_1\Model\OfflineChargeParametersCharge | offline charge parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineChargingOfflineCharge($customer_account_id, $subscription_id, $offline_charge_parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineChargingOfflineCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **offline_charge_parameters** | [**\iNew\Rest6_1\Model\OfflineChargeParametersCharge**](../Model/\iNew\Rest6_1\Model\OfflineChargeParametersCharge.md)| offline charge parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\OfflineChargeResponse**](../Model/OfflineChargeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetDataRating**
> \iNew\Rest6_1\Model\GetDataRatingResponse crceOfflineRatingGetDataRating($customer_account_id, $subscription_id, $accumulated_data, $bearer_type, $duration, $location, $rating_group, $roaming, $correlation_id, $transaction_id, $user)

gets the rating information for data sessions

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetDataRating  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for data sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$accumulated_data = 789; // int | the accumulatedData
$bearer_type = "bearer_type_example"; // string | the bearerType
$duration = 789; // int | the duration
$location = "location_example"; // string | the location
$rating_group = 56; // int | the ratingGroup
$roaming = true; // bool | the roaming
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetDataRating($customer_account_id, $subscription_id, $accumulated_data, $bearer_type, $duration, $location, $rating_group, $roaming, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineRatingGetDataRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **accumulated_data** | **int**| the accumulatedData |
 **bearer_type** | **string**| the bearerType |
 **duration** | **int**| the duration |
 **location** | **string**| the location |
 **rating_group** | **int**| the ratingGroup |
 **roaming** | **bool**| the roaming |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetDataRatingResponse**](../Model/GetDataRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetEventRating**
> \iNew\Rest6_1\Model\GetEventRatingResponse crceOfflineRatingGetEventRating($customer_account_id, $subscription_id, $called_party, $location, $message_type, $number_of_segments, $roaming, $traffic_type, $correlation_id, $transaction_id, $user)

gets the rating information for events (SMS/MMS)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetEventRating  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for events (SMS/MMS)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$called_party = "called_party_example"; // string | the calledParty
$location = "location_example"; // string | the location
$message_type = "message_type_example"; // string | the messageType
$number_of_segments = 56; // int | the numberOfSegments
$roaming = true; // bool | the roaming
$traffic_type = "traffic_type_example"; // string | the trafficType
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetEventRating($customer_account_id, $subscription_id, $called_party, $location, $message_type, $number_of_segments, $roaming, $traffic_type, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineRatingGetEventRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **called_party** | **string**| the calledParty |
 **location** | **string**| the location |
 **message_type** | **string**| the messageType |
 **number_of_segments** | **int**| the numberOfSegments |
 **roaming** | **bool**| the roaming |
 **traffic_type** | **string**| the trafficType |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetEventRatingResponse**](../Model/GetEventRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetRatings**
> \iNew\Rest6_1\Model\GetRatingResponse crceOfflineRatingGetRatings($customer_account_id, $subscription_id, $location, $roaming, $correlation_id, $transaction_id, $user)

gets the rating information for all types of traffic and events

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetRatings  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for all types of traffic and events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$location = "location_example"; // string | the location
$roaming = true; // bool | the roaming
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetRatings($customer_account_id, $subscription_id, $location, $roaming, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineRatingGetRatings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **location** | **string**| the location |
 **roaming** | **bool**| the roaming |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetRatingResponse**](../Model/GetRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOfflineRatingGetSessionRating**
> \iNew\Rest6_1\Model\GetSessionRatingResponse crceOfflineRatingGetSessionRating($customer_account_id, $subscription_id, $bearer_type, $called_party, $duration, $location, $roaming, $traffic_type, $correlation_id, $transaction_id, $user)

gets the rating information for voice sessions (MOC/MTC/MFC)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OfflineRating::GetSessionRating  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001150001 - Invalid called party (client error HTTP Status 400)   1001150002 - Event key is not supported for charging (client error HTTP Status 400)   1001150003 - unknown traffic type (client error HTTP Status 400)   1001150004 - service for the incoming request is not configured on subscriber's tariff (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the rating information for voice sessions (MOC/MTC/MFC)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$bearer_type = "bearer_type_example"; // string | the bearerType
$called_party = "called_party_example"; // string | the calledParty
$duration = 789; // int | the duration
$location = "location_example"; // string | the location
$roaming = true; // bool | the roaming
$traffic_type = "traffic_type_example"; // string | the trafficType
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOfflineRatingGetSessionRating($customer_account_id, $subscription_id, $bearer_type, $called_party, $duration, $location, $roaming, $traffic_type, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOfflineRatingGetSessionRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **bearer_type** | **string**| the bearerType |
 **called_party** | **string**| the calledParty |
 **duration** | **int**| the duration |
 **location** | **string**| the location |
 **roaming** | **bool**| the roaming |
 **traffic_type** | **string**| the trafficType |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetSessionRatingResponse**](../Model/GetSessionRatingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentGetRecurringCharges**
> \iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse crceOnlinePaymentGetRecurringCharges($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets recurring charges for the given OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::GetRecurringCharges  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Lists all recurring (scheduled) online payments for the given OnlinePaymentProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | the online payment profile ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceOnlinePaymentGetRecurringCharges($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOnlinePaymentGetRecurringCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **opp_id** | **int**| the online payment profile ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse**](../Model/GetRecurringOnlinePaymentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentGetRecurringOnlinePayments**
> \iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse crceOnlinePaymentGetRecurringOnlinePayments($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets recurring online payments for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::GetRecurringOnlinePayments  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Lists all recurring (scheduled) online payments for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceOnlinePaymentGetRecurringOnlinePayments($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOnlinePaymentGetRecurringOnlinePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse**](../Model/GetRecurringOnlinePaymentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentGetRecurringOnlinePaymentsCustomer**
> \iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse crceOnlinePaymentGetRecurringOnlinePaymentsCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets recurring online payments for the given customer

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::GetRecurringOnlinePaymentsCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Lists all recurring (scheduled) online payments for the given customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceOnlinePaymentGetRecurringOnlinePaymentsCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOnlinePaymentGetRecurringOnlinePaymentsCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetRecurringOnlinePaymentsResponse**](../Model/GetRecurringOnlinePaymentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentUpdateBundle**
> \iNew\Rest6_1\Model\UpdateBundleResponse crceOnlinePaymentUpdateBundle($customer_account_id, $subscription_id, $bundle_code, $payment, $correlation_id, $pin, $transaction_id, $user)

updates the payment method for the given bundle

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::UpdateBundle  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Updates payment option for renewals of activated bundle. Depending on onlinePaymentProfileId: <ul> <li>if oppId is not null, next bundle renewals will be purchased using that payment profile <li>if oppId is null, next bundle renewals will be purchased using main balance </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$bundle_code = "bundle_code_example"; // string | the bundle code identifying the bundle that should be updated
$payment = new \iNew\Rest6_1\Model\PaymentMethod(); // \iNew\Rest6_1\Model\PaymentMethod | the payment method that should be used
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOnlinePaymentUpdateBundle($customer_account_id, $subscription_id, $bundle_code, $payment, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOnlinePaymentUpdateBundle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **bundle_code** | **string**| the bundle code identifying the bundle that should be updated |
 **payment** | [**\iNew\Rest6_1\Model\PaymentMethod**](../Model/\iNew\Rest6_1\Model\PaymentMethod.md)| the payment method that should be used |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateBundleResponse**](../Model/UpdateBundleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOnlinePaymentUpdatePlan**
> \iNew\Rest6_1\Model\UpdatePlanResponse crceOnlinePaymentUpdatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $payment, $correlation_id, $pin, $transaction_id, $user)

updates the payment method for the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::OnlinePayment::UpdatePlan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Updates payment option for renewals of activated plan. Depending on onlinePaymentProfileId: <ul> <li>if oppId is not null, next plan renewals will be purchased using that payment profile <li>if oppId is null, next plan renewals will be purchased using main balance </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan ID identifying the plan that should be updated
$payment = new \iNew\Rest6_1\Model\PaymentMethod(); // \iNew\Rest6_1\Model\PaymentMethod | the payment method that should be used
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOnlinePaymentUpdatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $payment, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOnlinePaymentUpdatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan ID identifying the plan that should be updated |
 **payment** | [**\iNew\Rest6_1\Model\PaymentMethod**](../Model/\iNew\Rest6_1\Model\PaymentMethod.md)| the payment method that should be used |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdatePlanResponse**](../Model/UpdatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceOverdraftGetOverdraftStatus**
> \iNew\Rest6_1\Model\GetOverdraftStatusResponse crceOverdraftGetOverdraftStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

gets the status of the overdraft functionality for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Overdraft::GetOverdraftStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns current status of overdraft loan subscriber has not paid back or information about overdraft loan subscriber is eligible for. The only mandatory field is subscriber identifier (ID/MSISDN/IMSI/ICCID) -> GetOverdraftStatusRequest#setSubscriptionIdentifier(com.inew.commons.base.api.model.SubscriptionIdentifier)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceOverdraftGetOverdraftStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceOverdraftGetOverdraftStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetOverdraftStatusResponse**](../Model/GetOverdraftStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationAcceptOffer**
> \iNew\Rest6_1\Model\ConfirmSubscriberAdditionResponse crcePoolAdministrationAcceptOffer($customer_account_id, $subscription_id, $pool_id, $confirmation_code, $correlation_id, $transaction_id, $user, $pool_user)

accepts the offer to join the given pool (pool admin or pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::AcceptOffer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   accepts the offer to join the given pool (pool admin or pool user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$confirmation_code = "confirmation_code_example"; // string | the confirmationCode
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | In case the owner of the pool confirms for the new user, one of the identifiers has to be provided

try {
    $result = $api_instance->crcePoolAdministrationAcceptOffer($customer_account_id, $subscription_id, $pool_id, $confirmation_code, $correlation_id, $transaction_id, $user, $pool_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationAcceptOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **confirmation_code** | **string**| the confirmationCode |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| In case the owner of the pool confirms for the new user, one of the identifiers has to be provided | [optional]

### Return type

[**\iNew\Rest6_1\Model\ConfirmSubscriberAdditionResponse**](../Model/ConfirmSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationCreatePool**
> \iNew\Rest6_1\Model\CreatePoolResponse crcePoolAdministrationCreatePool($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

creates a pool

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::CreatePool  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Creates and returns new pool for subscriber. If subscriber already owns a pool, the existing one is returned in the response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationCreatePool($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationCreatePool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreatePoolResponse**](../Model/CreatePoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationDeletePool**
> \iNew\Rest6_1\Model\DeletePoolResponse crcePoolAdministrationDeletePool($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

deletes a pool

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::DeletePool  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Deletes existing pool. Should be possible only if there are no resources shared by sponsors currently

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationDeletePool($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationDeletePool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeletePoolResponse**](../Model/DeletePoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationGetPoolDetails**
> \iNew\Rest6_1\Model\GetPoolDetailsResponse crcePoolAdministrationGetPoolDetails($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

gets the pooling status details (pool admin and user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::GetPoolDetails  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Returns detailed information about pools subscriber is participating in. Subscriber can be part of two pools - one as a owner/sponsor, second one as a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationGetPoolDetails($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationGetPoolDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPoolDetailsResponse**](../Model/GetPoolDetailsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationLeavePool**
> \iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse crcePoolAdministrationLeavePool($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

leave the given pool (pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::LeavePool  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Removes subscriber from the pool of sponsor subscriber. If subscriber is still unauthorized or valid member of the pool, he is directly removed out of it and cannot use shared resources of the sponsor anymore

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationLeavePool($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationLeavePool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse**](../Model/RemoveSubscriberFromPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationOffer**
> \iNew\Rest6_1\Model\AddSubscriberToPoolResponse crcePoolAdministrationOffer($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

sends an offer to join the pool to another subscription (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::Offer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends an offer to join the pool to another subscription (pool admin)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationOffer($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\AddSubscriberToPoolResponse**](../Model/AddSubscriberToPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRefuseOffer**
> \iNew\Rest6_1\Model\CancelSubscriberAdditionResponse crcePoolAdministrationRefuseOffer($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user)

refuse the offer to join the given pool (pool user)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RefuseOffer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Cancels the subscriber addition to the pool. Reserved charges are returned to sponsor subscriber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRefuseOffer($customer_account_id, $subscription_id, $pool_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationRefuseOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CancelSubscriberAdditionResponse**](../Model/CancelSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRemoveFromPool**
> \iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse crcePoolAdministrationRemoveFromPool($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

removes the given subscription from the pool (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RemoveFromPool  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Removes the given ID/IMSI/ICCID/MSISDN from the pool. Is only possible if given subscriptionId is the owner of the pool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRemoveFromPool($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationRemoveFromPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RemoveSubscriberFromPoolResponse**](../Model/RemoveSubscriberFromPoolResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crcePoolAdministrationRevokeOffer**
> \iNew\Rest6_1\Model\CancelSubscriberAdditionResponse crcePoolAdministrationRevokeOffer($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user)

revokes the offer to join the pool for a subscription (pool admin)

**Access Restriction:** SELF_CARE  **Operation ID:** crce::PoolAdministration::RevokeOffer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001050001 - Invalid subscriber (client error HTTP Status 400)   1001050002 - Unknown pool (client error HTTP Status 400)   1001050003 - Subscriber is no pool participant (client error HTTP Status 400)   1001050004 - Subscriber is already a sponsor of a pool (client error HTTP Status 400)   1001050005 - Subscriber is already a user of a pool (client error HTTP Status 400)   1001050006 - Authorization error (client error HTTP Status 400)   1001050007 - Pool size exceeded (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Revokes the offer for the given ID/IMSI/ICCID/MSISDN to join the pool. Is only possible if given subscriptionId is the owner of the pool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$pool_id = 789; // int | the poolId
$pool_user = new \iNew\Rest6_1\Model\SubscriptionIdentifier(); // \iNew\Rest6_1\Model\SubscriptionIdentifier | null
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crcePoolAdministrationRevokeOffer($customer_account_id, $subscription_id, $pool_id, $pool_user, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crcePoolAdministrationRevokeOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **pool_id** | **int**| the poolId |
 **pool_user** | [**\iNew\Rest6_1\Model\SubscriptionIdentifier**](../Model/\iNew\Rest6_1\Model\SubscriptionIdentifier.md)| null |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CancelSubscriberAdditionResponse**](../Model/CancelSubscriberAdditionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceSubscriberAddFlag**
> \iNew\Rest6_1\Model\AddFlagResponse crceSubscriberAddFlag($customer_account_id, $subscription_id, $flag, $correlation_id, $transaction_id, $user)

adds a flag to the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Subscriber::AddFlag  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   adds a flag to the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$flag = "flag_example"; // string | the flag
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceSubscriberAddFlag($customer_account_id, $subscription_id, $flag, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceSubscriberAddFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **flag** | **string**| the flag |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\AddFlagResponse**](../Model/AddFlagResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceSubscriberRemoveFlag**
> \iNew\Rest6_1\Model\RemoveFlagResponse crceSubscriberRemoveFlag($customer_account_id, $subscription_id, $flag, $correlation_id, $transaction_id, $user)

removes a flag from the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Subscriber::RemoveFlag  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   removes a flag from the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$flag = "flag_example"; // string | the flag
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceSubscriberRemoveFlag($customer_account_id, $subscription_id, $flag, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceSubscriberRemoveFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **flag** | **string**| the flag |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\RemoveFlagResponse**](../Model/RemoveFlagResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceSubscriberSearchByCustomer**
> \iNew\Rest6_1\Model\SearchByCustomerResponse crceSubscriberSearchByCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

searches for subscription for the given customer

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Subscriber::SearchByCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   searches for subscription for the given customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->crceSubscriberSearchByCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceSubscriberSearchByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\SearchByCustomerResponse**](../Model/SearchByCustomerResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffActivatePlan**
> \iNew\Rest6_1\Model\ActivatePlanResponse crceTariffActivatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $pin, $transaction_id, $user, $opp_id, $definition)

activates the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::ActivatePlan  **Possible response codes:**   -1 - in progress (successful HTTP Status 200)   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1038000001 - missing provider id (client error HTTP Status 400)   1038000002 - missing mandatory arguments in request (client error HTTP Status 400)   1038000003 - Database error (server error HTTP Status 500)   1038000004 - unknown subscription (client error HTTP Status 400)   1038000005 - service is unavailable (server error HTTP Status 500)   1038000006 - calculation problem (client error HTTP Status 400)   1038000007 - invalid plan (client error HTTP Status 400)   1038000008 - missing plan id (client error HTTP Status 400)   1038000009 - currency not found in CRCE (server error HTTP Status 500)   1038000010 - currency lookup failure in CRCE (server error HTTP Status 500)   1038000011 - invalid subscriber state (client error HTTP Status 400)   1038000012 - insufficient funds (client error HTTP Status 400)   1038000013 - plan already activated (client error HTTP Status 400)   1038000014 - quota limit exceeded (client error HTTP Status 400)   1038000015 - invalid arguments in CRCE (client error HTTP Status 400)   1038000016 - invalid plan definition (client error HTTP Status 400)   1038000017 - subscriber already pooled (client error HTTP Status 400)   1038000018 - unknown counter in CRCE (client error HTTP Status 400)   1038000019 - unknown tariff (client error HTTP Status 400)   1038000020 - unknown provider (client error HTTP Status 400)   1038000021 - unknown location in CRCE (client error HTTP Status 400)   1038000022 - database error in CRCE (client error HTTP Status 400)  **Notes:**   activates the given plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan ID of the plan that should be activated
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$opp_id = 789; // int | the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment
$definition = new \iNew\Rest6_1\Model\PlanDefinition(); // \iNew\Rest6_1\Model\PlanDefinition | the definition with which to activate, in case the selected plan has a category of DEFINABLE_TARIFF_PLAN

try {
    $result = $api_instance->crceTariffActivatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $pin, $transaction_id, $user, $opp_id, $definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceTariffActivatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan ID of the plan that should be activated |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **opp_id** | **int**| the online payment profile ID to use for the payment, if not provided the main balance (e.g. of the prepaid account) will be used for the payment | [optional]
 **definition** | [**\iNew\Rest6_1\Model\PlanDefinition**](../Model/\iNew\Rest6_1\Model\PlanDefinition.md)| the definition with which to activate, in case the selected plan has a category of DEFINABLE_TARIFF_PLAN | [optional]

### Return type

[**\iNew\Rest6_1\Model\ActivatePlanResponse**](../Model/ActivatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffChangeActivateTariff**
> \iNew\Rest6_1\Model\TariffChangeResponse crceTariffChangeActivateTariff($customer_account_id, $subscription_id, $tariff_id, $correlation_id, $transaction_id, $user)

activates the tariff and charges the tariff change costs

**Access Restriction:** SELF_CARE  **Operation ID:** crce::TariffChange::ActivateTariff  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   activates the tariff and charges the tariff change costs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_id = 789; // int | the tariffId representing tariff for which the cost for tariff change is wanted
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffChangeActivateTariff($customer_account_id, $subscription_id, $tariff_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceTariffChangeActivateTariff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_id** | **int**| the tariffId representing tariff for which the cost for tariff change is wanted |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\TariffChangeResponse**](../Model/TariffChangeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffChangeGetAllAvailable**
> \iNew\Rest6_1\Model\GetAvailableTariffsResponse crceTariffChangeGetAllAvailable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

returns all available tariff to which the subscription can be changed

**Access Restriction:** SELF_CARE  **Operation ID:** crce::TariffChange::GetAllAvailable  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001060001 - there are no currencies configured (client error HTTP Status 400)   1001060004 - unknown currency (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns all available tariff to which the subscription can be changed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffChangeGetAllAvailable($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceTariffChangeGetAllAvailable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableTariffsResponse**](../Model/GetAvailableTariffsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffChangeGetAvailable**
> \iNew\Rest6_1\Model\GetAvailableTariffResponse crceTariffChangeGetAvailable($customer_account_id, $subscription_id, $tariff_id, $correlation_id, $transaction_id, $user)

returns the cost information for the desired tariff to activate

**Access Restriction:** SELF_CARE  **Operation ID:** crce::TariffChange::GetAvailable  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001060001 - there are no currencies configured (client error HTTP Status 400)   1001060004 - unknown currency (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the cost information for the desired tariff to activate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_id = 789; // int | the tariffId representing tariff for which the cost for tariff change is wanted
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffChangeGetAvailable($customer_account_id, $subscription_id, $tariff_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceTariffChangeGetAvailable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_id** | **int**| the tariffId representing tariff for which the cost for tariff change is wanted |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailableTariffResponse**](../Model/GetAvailableTariffResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffDeactivatePlan**
> \iNew\Rest6_1\Model\DeactivatePlanResponse crceTariffDeactivatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user)

deactivates the given plan

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::DeactivatePlan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   deactivates the given plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$tariff_plan_id = 789; // int | the tariff plan id to deactivate
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffDeactivatePlan($customer_account_id, $subscription_id, $tariff_plan_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceTariffDeactivatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **tariff_plan_id** | **int**| the tariff plan id to deactivate |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeactivatePlanResponse**](../Model/DeactivatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetActivePlan**
> \iNew\Rest6_1\Model\GetPlanResponse crceTariffGetActivePlan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

returns the activated plan for the given parameters

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetActivePlan  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the activated plan for the given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffGetActivePlan($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceTariffGetActivePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPlanResponse**](../Model/GetPlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetActiveTariff**
> \iNew\Rest6_1\Model\GetTariffResponse crceTariffGetActiveTariff($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

returns the active tariff for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetActiveTariff  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the active tariff for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->crceTariffGetActiveTariff($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceTariffGetActiveTariff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetTariffResponse**](../Model/GetTariffResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crceTariffGetAvailablePlansCustomer**
> \iNew\Rest6_1\Model\GetAvailablePlansResponse1 crceTariffGetAvailablePlansCustomer($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans)

returns the available plans

**Access Restriction:** SELF_CARE  **Operation ID:** crce::Tariff::GetAvailablePlansCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000001 - CRCE unknown error (server error HTTP Status 500)   1001000002 - Database error (server error HTTP Status 500)   1001000003 - insufficent funds (client error HTTP Status 400)   1001000004 - unknown tariff (client error HTTP Status 400)   1001000005 - unknown subscriber (client error HTTP Status 400)   1001000006 - subscriber not active (client error HTTP Status 400)   1001000007 - invalid reservation (client error HTTP Status 400)   1001000008 - unknown provider (client error HTTP Status 400)   1001000009 - quota limit exceeded (client error HTTP Status 400)   1001000010 - unknown location (client error HTTP Status 400)   1001000011 - unknown counter (client error HTTP Status 400)   1001000012 - invalid arguments (client error HTTP Status 400)   1001000013 - payment method not allowed (client error HTTP Status 400)   1001000014 - payment profile invalid (client error HTTP Status 400)   1001000015 - invalid action (client error HTTP Status 400)   1001000016 - invalid state (client error HTTP Status 400)   1001000017 - invalid subscriber state (client error HTTP Status 400)   1001000018 - unknown bundle (client error HTTP Status 400)   1001000019 - Unknown customer (client error HTTP Status 400)   1001000020 - Permission denied (client error HTTP Status 400)   1001000021 - Invalid security code (client error HTTP Status 400)   1001020001 - invalid plan definition (client error HTTP Status 400)   1001020002 - plan already activated (client error HTTP Status 400)   1001020003 - indicates the the subscription already belongs to a pool, and cannot join a second pool (client error HTTP Status 400)   1001020004 - Indicates that plan cannot be purchased from reservation as it was not found (wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1001020005 - Indicates that tariff change cannot be allowed (insufficient funds, wrong reservation ID, expired reservation etc.) (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$payment_option = "payment_option_example"; // string | the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise)
$show_flexi_plans = true; // bool | a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise)
$show_shared_plans = true; // bool | a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise)

try {
    $result = $api_instance->crceTariffGetAvailablePlansCustomer($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page, $payment_option, $show_flexi_plans, $show_shared_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->crceTariffGetAvailablePlansCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_option** | **string**| the payment option, if provided the result of this request will be filtered to only show plans which can be paid for with the provided payment method (default value is PaymentOption#ALL, if Add-On: Online Payments is enabled or PaymentOption#MAIN_BALANCE otherwise) | [optional]
 **show_flexi_plans** | **bool**| a boolean indicating if Flexi plans (Add-On: Flexi-Plan) should be contained in the result (default value is true, if Add-On: Flexi-Plan is enabled or false otherwise) | [optional]
 **show_shared_plans** | **bool**| a boolean indicating if shared plans (Add-On: Resource Pooling) should be contained in the result (default value is true, if Add-On: Resource Pooling is enabled or false otherwise) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetAvailablePlansResponse1**](../Model/GetAvailablePlansResponse1.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **historyHistoryServiceGetHistory**
> \iNew\Rest6_1\Model\GetHistoryResponse historyHistoryServiceGetHistory($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types)

returns the history

**Access Restriction:** SELF_CARE  **Operation ID:** history::HistoryService::GetHistory  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1025000000 - An unknown error occured (client error HTTP Status 400)   1025000001 - Invalid request (client error HTTP Status 400)   1025000002 - Invalid argument (client error HTTP Status 400)  **Notes:**   the query parameters contained in group (startYear, endYear, startWeek, endWeek) and group (startDate, endDate) must not both be provided at the same time!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$end_date = new \DateTime(); // \DateTime | the end date in ISO8601 format
$end_week = 56; // int | the end week
$end_year = 56; // int | the end year
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$sort_type = "sort_type_example"; // string | the attribute results are sorted by
$start_date = new \DateTime(); // \DateTime | the start date in ISO8601 format
$start_week = 56; // int | the start week
$start_year = 56; // int | the start year
$sub_types = "sub_types_example"; // string | a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER]
$types = "types_example"; // string | a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC]

try {
    $result = $api_instance->historyHistoryServiceGetHistory($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->historyHistoryServiceGetHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **end_date** | **\DateTime**| the end date in ISO8601 format | [optional]
 **end_week** | **int**| the end week | [optional]
 **end_year** | **int**| the end year | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **sort_type** | **string**| the attribute results are sorted by | [optional]
 **start_date** | **\DateTime**| the start date in ISO8601 format | [optional]
 **start_week** | **int**| the start week | [optional]
 **start_year** | **int**| the start year | [optional]
 **sub_types** | **string**| a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER] | [optional]
 **types** | **string**| a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC] | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetHistoryResponse**](../Model/GetHistoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **historyHistoryServiceGetHistoryCustomer**
> \iNew\Rest6_1\Model\GetHistoryResponse historyHistoryServiceGetHistoryCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types)

returns the history

**Access Restriction:** SELF_CARE  **Operation ID:** history::HistoryService::GetHistoryCustomer  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1025000000 - An unknown error occured (client error HTTP Status 400)   1025000001 - Invalid request (client error HTTP Status 400)   1025000002 - Invalid argument (client error HTTP Status 400)  **Notes:**   the query parameters contained in group (startYear, endYear, startWeek, endWeek) and group (startDate, endDate) must not both be provided at the same time!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$end_date = new \DateTime(); // \DateTime | the end date in ISO8601 format
$end_week = 56; // int | the end week
$end_year = 56; // int | the end year
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)
$sort_type = "sort_type_example"; // string | the attribute results are sorted by
$start_date = new \DateTime(); // \DateTime | the start date in ISO8601 format
$start_week = 56; // int | the start week
$start_year = 56; // int | the start year
$sub_types = "sub_types_example"; // string | a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER]
$types = "types_example"; // string | a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC]

try {
    $result = $api_instance->historyHistoryServiceGetHistoryCustomer($customer_account_id, $correlation_id, $transaction_id, $user, $end_date, $end_week, $end_year, $entities_per_page, $page, $sort_type, $start_date, $start_week, $start_year, $sub_types, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->historyHistoryServiceGetHistoryCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **end_date** | **\DateTime**| the end date in ISO8601 format | [optional]
 **end_week** | **int**| the end week | [optional]
 **end_year** | **int**| the end year | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **sort_type** | **string**| the attribute results are sorted by | [optional]
 **start_date** | **\DateTime**| the start date in ISO8601 format | [optional]
 **start_week** | **int**| the start week | [optional]
 **start_year** | **int**| the start year | [optional]
 **sub_types** | **string**| a comma separated list consisting of the following constants [ADMINISTRATION, BUNDLE, CALL, CUSTOMER, DATA, DEVICE, FNF, GROUP, LOAN, MESSAGE, MONEY_TRANSFER, NOTIFICATION, PAYMENT, PAYMENT_PROFILE, POOL, REFERRAL, REFUND, SIM, SUBSCRIBER, SUBSCRIPTION, TARIFF, TOPUP, VOUCHER] | [optional]
 **types** | **string**| a comma separated list consisting of the following constants [CONFIRMATION, CUSTOMER, LIFECYCLE, PAYMENT, RECHARGE, TRAFFIC] | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetHistoryResponse**](../Model/GetHistoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lcmCampaignSearchServiceGetEligible**
> \iNew\Rest6_1\Model\GetCampaignsResponse lcmCampaignSearchServiceGetEligible($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

gets the campaigns the subscription is eligible for

**Access Restriction:** SELF_CARE  **Operation ID:** lcm::CampaignSearchService::GetEligible  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1004000001 - An unknown error occured (server error HTTP Status 500)   1004000002 - A Database error occured (server error HTTP Status 500)   1004000003 - invalid arguments (client error HTTP Status 400)   1004000004 - An IO error occured (server error HTTP Status 500)   1004000006 - the remote service is unavailable (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the campaigns the subscription is eligible for

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->lcmCampaignSearchServiceGetEligible($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->lcmCampaignSearchServiceGetEligible: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceAssign**
> \iNew\Rest6_1\Model\ReferralCodeResponse referralReferralServiceAssign($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::Assign  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Requests assignment of a referral code to the subscription which is then sent to the via preferred type of notification (SMS or email)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceAssign($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->referralReferralServiceAssign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ReferralCodeResponse**](../Model/ReferralCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceGetStatus**
> \iNew\Rest6_1\Model\ReferralStatusResponse referralReferralServiceGetStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

queries the status of the subscription's referrals, such as its expire date and current amount of usages

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::GetStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   queries the status of the subscription's referrals, such as its expire date and current amount of usages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceGetStatus($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->referralReferralServiceGetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ReferralStatusResponse**](../Model/ReferralStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceRedeem**
> \iNew\Rest6_1\Model\ReferralRewardResponse referralReferralServiceRedeem($customer_account_id, $subscription_id, $referral_code, $correlation_id, $transaction_id, $user)

Validates the provided referral code and rewards the referral code user and owner

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::Redeem  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Validates the provided referral code and rewards the referral code user and owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$referral_code = "referral_code_example"; // string | the referral code
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceRedeem($customer_account_id, $subscription_id, $referral_code, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->referralReferralServiceRedeem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **referral_code** | **string**| the referral code |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ReferralRewardResponse**](../Model/ReferralRewardResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referralReferralServiceResend**
> \iNew\Rest6_1\Model\ReferralCodeResponse referralReferralServiceResend($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

Resends already assigned referral code to the owner via preferred type of notification (SMS or email)

**Access Restriction:** SELF_CARE  **Operation ID:** referral::ReferralService::Resend  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1029000001 - the subscriber with the provided MSISDN does not exist (client error HTTP Status 400)   1029000002 - the subscriber already owns the referral code (client error HTTP Status 400)   1029000003 - the subscriber doesn't own yet the referral code (client error HTTP Status 400)   1029000004 - there is no available referral code (server error HTTP Status 500)   1029000005 - Unknown referral code (server error HTTP Status 500)   1029000006 - There is no match of the referral code string and the provided owner MSISDN (server error HTTP Status 500)   1029000007 - Referral code is not valid anymore (server error HTTP Status 500)   1029000008 - Maximum referral code usage limit reached (client error HTTP Status 400)   1029000009 - Referral code has been already used too many times so the usage limit has been reached (client error HTTP Status 400)   1029000010 - There is no referral campaign configured (client error HTTP Status 400)   1029000011 - subscriber is attempting to use its own referral code (client error HTTP Status 400)   1029000012 - A Database error occured (server error HTTP Status 500)   1029000013 - An internal system error occured (server error HTTP Status 500)   1029000014 - An unknown error occured (server error HTTP Status 500)   1029000015 - An error occured, e.g. mismatching service providers (server error HTTP Status 500)   1029000016 - Unassigned referral code (server error HTTP Status 500)   1029000017 - The provided user already redeemed referral code (server error HTTP Status 500)  **Notes:**   Resends already assigned referral code to the owner via preferred type of notification (SMS or email)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->referralReferralServiceResend($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->referralReferralServiceResend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ReferralCodeResponse**](../Model/ReferralCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationAdministrationServiceGetNotifications**
> \iNew\Rest6_1\Model\GetNotificationsResponse snaSubscriberNotificationAdministrationServiceGetNotifications($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

returns the available notifications for the given subscription

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationAdministrationService::GetNotifications  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000008 - database error (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   returns the available notifications for the given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->snaSubscriberNotificationAdministrationServiceGetNotifications($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->snaSubscriberNotificationAdministrationServiceGetNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetNotificationsResponse**](../Model/GetNotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationAdministrationServiceSetNotificationPreferences**
> \iNew\Rest6_1\Model\SetNotificationPreferencesResponse snaSubscriberNotificationAdministrationServiceSetNotificationPreferences($customer_account_id, $subscription_id, $preferences, $correlation_id, $transaction_id, $user)

sets the notification preferences

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationAdministrationService::SetNotificationPreferences  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000008 - database error (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sets the notification preferences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$preferences = new \iNew\Rest6_1\Model\ChannelPreferenceList(); // \iNew\Rest6_1\Model\ChannelPreferenceList | the preferences
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationAdministrationServiceSetNotificationPreferences($customer_account_id, $subscription_id, $preferences, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->snaSubscriberNotificationAdministrationServiceSetNotificationPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **preferences** | [**\iNew\Rest6_1\Model\ChannelPreferenceList**](../Model/\iNew\Rest6_1\Model\ChannelPreferenceList.md)| the preferences |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SetNotificationPreferencesResponse**](../Model/SetNotificationPreferencesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSend**
> \iNew\Rest6_1\Model\SendNotificationResponse snaSubscriberNotificationServiceSend($customer_account_id, $subscription_id, $contents, $correlation_id, $transaction_id, $user, $channel)

sends a notification to the given subscription based on a notification key and parameters

**Access Restriction:** CRM  **Operation ID:** sna::SubscriberNotificationService::Send  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000002 - the template is unknown (client error HTTP Status 400)   1019000003 - the notification is unknown (client error HTTP Status 400)   1019000004 - the template cannot be resolved (client error HTTP Status 400)   1019000005 - scheduling error (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a notification to the given subscription based on a notification key and parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$contents = new \iNew\Rest6_1\Model\ContentsSend(); // \iNew\Rest6_1\Model\ContentsSend | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$channel = "channel_example"; // string | the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured)

try {
    $result = $api_instance->snaSubscriberNotificationServiceSend($customer_account_id, $subscription_id, $contents, $correlation_id, $transaction_id, $user, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->snaSubscriberNotificationServiceSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSend**](../Model/\iNew\Rest6_1\Model\ContentsSend.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **channel** | **string**| the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured) | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendNotificationResponse**](../Model/SendNotificationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSendByCategory**
> \iNew\Rest6_1\Model\SendNotificationResponse snaSubscriberNotificationServiceSendByCategory($customer_account_id, $subscription_id, $channel, $contents, $correlation_id, $transaction_id, $user)

sends a notification to the given subscription with the given contents

**Access Restriction:** CRM  **Operation ID:** sna::SubscriberNotificationService::SendByCategory  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1019000007 - unknown category (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a notification to the given subscription with the given contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$channel = "channel_example"; // string | the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured)
$contents = new \iNew\Rest6_1\Model\ContentsSendByCategory(); // \iNew\Rest6_1\Model\ContentsSendByCategory | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationServiceSendByCategory($customer_account_id, $subscription_id, $channel, $contents, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->snaSubscriberNotificationServiceSendByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **channel** | **string**| the channel the subscription should be notified on, usually SMS is a good idea, since subscriptions always can receive SMS (e.g. E-Mail might not be configured) |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSendByCategory**](../Model/\iNew\Rest6_1\Model\ContentsSendByCategory.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendNotificationResponse**](../Model/SendNotificationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snaSubscriberNotificationServiceSendImmediate**
> \iNew\Rest6_1\Model\SendImmediateResponse snaSubscriberNotificationServiceSendImmediate($customer_account_id, $subscription_id, $contents, $correlation_id, $transaction_id, $user)

sends a SMS to the given subscription immediately with the given contents

**Access Restriction:** SELF_CARE  **Operation ID:** sna::SubscriberNotificationService::SendImmediate  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1019000000 - unknown SNA error (client error HTTP Status 400)   1019000001 - the subscriber is unknown (client error HTTP Status 400)   1019000006 - invalid arguments (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   sends a SMS to the given subscription immediately with the given contents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$contents = new \iNew\Rest6_1\Model\ContentsSendImmediate(); // \iNew\Rest6_1\Model\ContentsSendImmediate | the contents of the notification
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->snaSubscriberNotificationServiceSendImmediate($customer_account_id, $subscription_id, $contents, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->snaSubscriberNotificationServiceSendImmediate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **contents** | [**\iNew\Rest6_1\Model\ContentsSendImmediate**](../Model/\iNew\Rest6_1\Model\ContentsSendImmediate.md)| the contents of the notification |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SendImmediateResponse**](../Model/SendImmediateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topupTopupServiceCancel**
> \iNew\Rest6_1\Model\CancelTopupResponse topupTopupServiceCancel($transaction_id, $customer_account_id, $subscription_id, $correlation_id, $user)

cancels the topup transaction

**Access Restriction:** SELF_CARE  **Operation ID:** topup::TopupService::Cancel  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1039000001 - Unknown error (server error HTTP Status 500)   1039000002 - Top-up amount too low (client error HTTP Status 400)   1039000003 - Top-up amount too high (client error HTTP Status 400)   1039000006 - Unknown subscriber (client error HTTP Status 400)   1039000010 - System busy (server error HTTP Status 500)   1039000013 - Internal error (server error HTTP Status 500)   1039000014 - Top-up not allowed (client error HTTP Status 400)   1039000109 - Transaction ID is not valid (client error HTTP Status 400)   1039000200 - Validation error (client error HTTP Status 400)   1039000202 - Transaction already initiated (client error HTTP Status 400)   1039000203 - Transaction is being processed (client error HTTP Status 400)   1039000204 - Transaction already committed (client error HTTP Status 400)   1039000205 - Monetary limit reached (client error HTTP Status 400)   1039000206 - Invalid currency (client error HTTP Status 400)  **Notes:**   Cancels topup transaction which was initiated by init topup operation. The transaction is identified by: <ul> <li>unique transactionId generated by init topup operation</li> <li>combination of refereneId used during init topup operation and distributorId</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$transaction_id = "transaction_id_example"; // string | the transactionId returned as a result of the init operation initializing the transaction
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->topupTopupServiceCancel($transaction_id, $customer_account_id, $subscription_id, $correlation_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->topupTopupServiceCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| the transactionId returned as a result of the init operation initializing the transaction |
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CancelTopupResponse**](../Model/CancelTopupResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topupTopupServiceCommit**
> \iNew\Rest6_1\Model\CommitTopupResponse topupTopupServiceCommit($transaction_id, $customer_account_id, $subscription_id, $correlation_id, $user)

commits the topup transaction

**Access Restriction:** SELF_CARE  **Operation ID:** topup::TopupService::Commit  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1039000001 - Unknown error (server error HTTP Status 500)   1039000002 - Top-up amount too low (client error HTTP Status 400)   1039000003 - Top-up amount too high (client error HTTP Status 400)   1039000006 - Unknown subscriber (client error HTTP Status 400)   1039000010 - System busy (server error HTTP Status 500)   1039000013 - Internal error (server error HTTP Status 500)   1039000014 - Top-up not allowed (client error HTTP Status 400)   1039000109 - Transaction ID is not valid (client error HTTP Status 400)   1039000200 - Validation error (client error HTTP Status 400)   1039000202 - Transaction already initiated (client error HTTP Status 400)   1039000203 - Transaction is being processed (client error HTTP Status 400)   1039000204 - Transaction already committed (client error HTTP Status 400)   1039000205 - Monetary limit reached (client error HTTP Status 400)   1039000206 - Invalid currency (client error HTTP Status 400)  **Notes:**   Commits topup transaction which was initiated by init topup operation. The transaction is identified by: <ul> <li>unique transactionId generated by init topup operation</li> <li>combination of refereneId used during init topup operation and distributorId</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$transaction_id = "transaction_id_example"; // string | the transactionId returned as a result of the init operation initializing the transaction
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->topupTopupServiceCommit($transaction_id, $customer_account_id, $subscription_id, $correlation_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->topupTopupServiceCommit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| the transactionId returned as a result of the init operation initializing the transaction |
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CommitTopupResponse**](../Model/CommitTopupResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topupTopupServiceInit**
> \iNew\Rest6_1\Model\InitTopupResponse topupTopupServiceInit($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

intializes the topup transaction

**Access Restriction:** SELF_CARE  **Operation ID:** topup::TopupService::Init  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1039000001 - Unknown error (server error HTTP Status 500)   1039000002 - Top-up amount too low (client error HTTP Status 400)   1039000003 - Top-up amount too high (client error HTTP Status 400)   1039000006 - Unknown subscriber (client error HTTP Status 400)   1039000010 - System busy (server error HTTP Status 500)   1039000013 - Internal error (server error HTTP Status 500)   1039000014 - Top-up not allowed (client error HTTP Status 400)   1039000109 - Transaction ID is not valid (client error HTTP Status 400)   1039000200 - Validation error (client error HTTP Status 400)   1039000202 - Transaction already initiated (client error HTTP Status 400)   1039000203 - Transaction is being processed (client error HTTP Status 400)   1039000204 - Transaction already committed (client error HTTP Status 400)   1039000205 - Monetary limit reached (client error HTTP Status 400)   1039000206 - Invalid currency (client error HTTP Status 400)  **Notes:**   intializes the topup transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\InitTopupParameters(); // \iNew\Rest6_1\Model\InitTopupParameters | the parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the unique transactionId to identify this topup transaction, if none provided one will be generated (recommended in case response code 1039000202 is returned)
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->topupTopupServiceInit($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->topupTopupServiceInit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\InitTopupParameters**](../Model/\iNew\Rest6_1\Model\InitTopupParameters.md)| the parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the unique transactionId to identify this topup transaction, if none provided one will be generated (recommended in case response code 1039000202 is returned) | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\InitTopupResponse**](../Model/InitTopupResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topupTopupServiceQuery**
> \iNew\Rest6_1\Model\QueryTopupResponse topupTopupServiceQuery($transaction_id, $customer_account_id, $subscription_id, $correlation_id, $user)

queries the status of the topup transaction

**Access Restriction:** SELF_CARE  **Operation ID:** topup::TopupService::Query  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1039000001 - Unknown error (server error HTTP Status 500)   1039000002 - Top-up amount too low (client error HTTP Status 400)   1039000003 - Top-up amount too high (client error HTTP Status 400)   1039000006 - Unknown subscriber (client error HTTP Status 400)   1039000010 - System busy (server error HTTP Status 500)   1039000013 - Internal error (server error HTTP Status 500)   1039000014 - Top-up not allowed (client error HTTP Status 400)   1039000109 - Transaction ID is not valid (client error HTTP Status 400)   1039000200 - Validation error (client error HTTP Status 400)   1039000202 - Transaction already initiated (client error HTTP Status 400)   1039000203 - Transaction is being processed (client error HTTP Status 400)   1039000204 - Transaction already committed (client error HTTP Status 400)   1039000205 - Monetary limit reached (client error HTTP Status 400)   1039000206 - Invalid currency (client error HTTP Status 400)  **Notes:**   Queries topup transaction which is identified by: <ul> <li>unique transactionId generated by init topup operation</li> <li>combination of refereneId used during init topup operation and distributorId</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$transaction_id = "transaction_id_example"; // string | the transactionId returned as a result of the init operation initializing the transaction
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->topupTopupServiceQuery($transaction_id, $customer_account_id, $subscription_id, $correlation_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->topupTopupServiceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| the transactionId returned as a result of the init operation initializing the transaction |
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\QueryTopupResponse**](../Model/QueryTopupResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topupTopupServiceTopup**
> \iNew\Rest6_1\Model\TopupResponse topupTopupServiceTopup($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user)

performs an instant topup

**Access Restriction:** SELF_CARE  **Operation ID:** topup::TopupService::Topup  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1039000001 - Unknown error (server error HTTP Status 500)   1039000002 - Top-up amount too low (client error HTTP Status 400)   1039000003 - Top-up amount too high (client error HTTP Status 400)   1039000006 - Unknown subscriber (client error HTTP Status 400)   1039000010 - System busy (server error HTTP Status 500)   1039000013 - Internal error (server error HTTP Status 500)   1039000014 - Top-up not allowed (client error HTTP Status 400)   1039000109 - Transaction ID is not valid (client error HTTP Status 400)   1039000200 - Validation error (client error HTTP Status 400)   1039000202 - Transaction already initiated (client error HTTP Status 400)   1039000203 - Transaction is being processed (client error HTTP Status 400)   1039000204 - Transaction already committed (client error HTTP Status 400)   1039000205 - Monetary limit reached (client error HTTP Status 400)   1039000206 - Invalid currency (client error HTTP Status 400)  **Notes:**   performs an instant topup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$parameters = new \iNew\Rest6_1\Model\TopupParameters(); // \iNew\Rest6_1\Model\TopupParameters | the parameters
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the unique transactionId to identify this topup transaction, if none provided one will be generated (recommended in case response code 1039000202 is returned)
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->topupTopupServiceTopup($customer_account_id, $subscription_id, $parameters, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->topupTopupServiceTopup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **parameters** | [**\iNew\Rest6_1\Model\TopupParameters**](../Model/\iNew\Rest6_1\Model\TopupParameters.md)| the parameters |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the unique transactionId to identify this topup transaction, if none provided one will be generated (recommended in case response code 1039000202 is returned) | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\TopupResponse**](../Model/TopupResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileCreate**
> \iNew\Rest6_1\Model\CreateOnlinePaymentProfileResponse ucpOnlinePaymentProfileCreate($customer_account_id, $profile, $correlation_id, $transaction_id, $user)

creates an OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Create  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   creates an OnlinePaymentProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$profile = new \iNew\Rest6_1\Model\OnlinePaymentProfileCreate(); // \iNew\Rest6_1\Model\OnlinePaymentProfileCreate | the profile
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileCreate($customer_account_id, $profile, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpOnlinePaymentProfileCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **profile** | [**\iNew\Rest6_1\Model\OnlinePaymentProfileCreate**](../Model/\iNew\Rest6_1\Model\OnlinePaymentProfileCreate.md)| the profile |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreateOnlinePaymentProfileResponse**](../Model/CreateOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileDelete**
> \iNew\Rest6_1\Model\DeleteOnlinePaymentProfileResponse ucpOnlinePaymentProfileDelete($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user)

deletes an OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Delete  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Deletes a payment profile by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | the payment profile ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileDelete($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpOnlinePaymentProfileDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **opp_id** | **int**| the payment profile ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeleteOnlinePaymentProfileResponse**](../Model/DeleteOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileGet**
> \iNew\Rest6_1\Model\GetOnlinePaymentProfileResponse ucpOnlinePaymentProfileGet($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user)

gets an OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Get  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Fetches a payment profile by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | the payment profile ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileGet($customer_account_id, $opp_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpOnlinePaymentProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **opp_id** | **int**| the payment profile ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetOnlinePaymentProfileResponse**](../Model/GetOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileGetOneClick**
> \iNew\Rest6_1\Model\GetOnlinePaymentProfileResponse ucpOnlinePaymentProfileGetOneClick($customer_account_id, $correlation_id, $transaction_id, $user)

gets the one click OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::GetOneClick  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   gets the one click OnlinePaymentProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileGetOneClick($customer_account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpOnlinePaymentProfileGetOneClick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetOnlinePaymentProfileResponse**](../Model/GetOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileSearch**
> \iNew\Rest6_1\Model\GetOnlinePaymentProfilesResponse ucpOnlinePaymentProfileSearch($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $name, $one_click, $page, $payment_method_id)

gets all OnlinePaymentProfiles for the given search parameters

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Search  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Fetches multiple payment profiles by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$name = "name_example"; // string | the payment profile name
$one_click = true; // bool | null
$page = 56; // int | the page requested (pagination)
$payment_method_id = 789; // int | the payment method ID

try {
    $result = $api_instance->ucpOnlinePaymentProfileSearch($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $name, $one_click, $page, $payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpOnlinePaymentProfileSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **name** | **string**| the payment profile name | [optional]
 **one_click** | **bool**| null | [optional]
 **page** | **int**| the page requested (pagination) | [optional]
 **payment_method_id** | **int**| the payment method ID | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetOnlinePaymentProfilesResponse**](../Model/GetOnlinePaymentProfilesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpOnlinePaymentProfileUpdate**
> \iNew\Rest6_1\Model\UpdateOnlinePaymentProfileResponse ucpOnlinePaymentProfileUpdate($customer_account_id, $opp_id, $profile, $correlation_id, $transaction_id, $user)

updates an OnlinePaymentProfile

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::OnlinePaymentProfile::Update  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates an OnlinePaymentProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$opp_id = 789; // int | null
$profile = new \iNew\Rest6_1\Model\OnlinePaymentProfileUpdate(); // \iNew\Rest6_1\Model\OnlinePaymentProfileUpdate | the profile
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpOnlinePaymentProfileUpdate($customer_account_id, $opp_id, $profile, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpOnlinePaymentProfileUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **opp_id** | **int**| null |
 **profile** | [**\iNew\Rest6_1\Model\OnlinePaymentProfileUpdate**](../Model/\iNew\Rest6_1\Model\OnlinePaymentProfileUpdate.md)| the profile |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateOnlinePaymentProfileResponse**](../Model/UpdateOnlinePaymentProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodCreate**
> \iNew\Rest6_1\Model\CreatePaymentMethodResponse ucpPaymentMethodCreate($customer_account_id, $payment_method_details, $correlation_id, $transaction_id, $user)

creates a credit card payment method

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Create  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Creates a payment method by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$payment_method_details = new \iNew\Rest6_1\Model\CreditCardMethodCreate(); // \iNew\Rest6_1\Model\CreditCardMethodCreate | the payment method details
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpPaymentMethodCreate($customer_account_id, $payment_method_details, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpPaymentMethodCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **payment_method_details** | [**\iNew\Rest6_1\Model\CreditCardMethodCreate**](../Model/\iNew\Rest6_1\Model\CreditCardMethodCreate.md)| the payment method details |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\CreatePaymentMethodResponse**](../Model/CreatePaymentMethodResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodDelete**
> \iNew\Rest6_1\Model\DeletePaymentMethodResponse ucpPaymentMethodDelete($customer_account_id, $id, $correlation_id, $transaction_id, $user)

deletes a credit card payment method

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Delete  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Deletes a payment method by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$id = 789; // int | the payment method details ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpPaymentMethodDelete($customer_account_id, $id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpPaymentMethodDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **id** | **int**| the payment method details ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\DeletePaymentMethodResponse**](../Model/DeletePaymentMethodResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodGet**
> \iNew\Rest6_1\Model\GetPaymentMethodResponse ucpPaymentMethodGet($customer_account_id, $id, $correlation_id, $transaction_id, $user)

gets a credit card payment method

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Get  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Fetches a payment method by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$id = 789; // int | the payment method details ID
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpPaymentMethodGet($customer_account_id, $id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpPaymentMethodGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **id** | **int**| the payment method details ID |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPaymentMethodResponse**](../Model/GetPaymentMethodResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodSearch**
> \iNew\Rest6_1\Model\GetPaymentMethodsResponse ucpPaymentMethodSearch($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page)

searches for credit card payment methods

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Search  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Fetches multiple payment methods by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request
$entities_per_page = 56; // int | the number of entities that should be returned per page (pagination)
$page = 56; // int | the page requested (pagination)

try {
    $result = $api_instance->ucpPaymentMethodSearch($customer_account_id, $correlation_id, $transaction_id, $user, $entities_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpPaymentMethodSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]
 **entities_per_page** | **int**| the number of entities that should be returned per page (pagination) | [optional]
 **page** | **int**| the page requested (pagination) | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetPaymentMethodsResponse**](../Model/GetPaymentMethodsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpPaymentMethodUpdate**
> \iNew\Rest6_1\Model\UpdatePaymentMethodResponse ucpPaymentMethodUpdate($customer_account_id, $id, $payment_method_details, $correlation_id, $transaction_id, $user)

updates a credit card payment method

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::PaymentMethod::Update  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001080001 - Unknown payment profile (client error HTTP Status 400)   1001080002 - Unknown payment details (client error HTTP Status 400)   1001080003 - Unassigned payment details (client error HTTP Status 400)   1001080004 - Invalid payment option for the product (client error HTTP Status 400)   1001080005 - Error with payment on Payment Gateway (client error HTTP Status 400)   1001080006 - Timeout on Payment Gateway (server error HTTP Status 500)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   updates a credit card payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$id = 789; // int | null
$payment_method_details = new \iNew\Rest6_1\Model\CreditCardMethodUpdate(); // \iNew\Rest6_1\Model\CreditCardMethodUpdate | the payment method details
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpPaymentMethodUpdate($customer_account_id, $id, $payment_method_details, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpPaymentMethodUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **id** | **int**| null |
 **payment_method_details** | [**\iNew\Rest6_1\Model\CreditCardMethodUpdate**](../Model/\iNew\Rest6_1\Model\CreditCardMethodUpdate.md)| the payment method details |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdatePaymentMethodResponse**](../Model/UpdatePaymentMethodResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceChangePin**
> \iNew\Rest6_1\Model\UpdateSecurityInfoResponse ucpSecurityServiceChangePin($new_pin, $customer_account_id, $correlation_id, $pin, $transaction_id, $user)

changes the pin for the given customerAccountId. Current pin needs to be provided

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::ChangePin  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Saves (creates or updates) the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$new_pin = "new_pin_example"; // string | the newPin
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceChangePin($new_pin, $customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpSecurityServiceChangePin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_pin** | **string**| the newPin |
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSecurityInfoResponse**](../Model/UpdateSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceDisableSecurity**
> \iNew\Rest6_1\Model\UpdateSecurityInfoResponse ucpSecurityServiceDisableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user)

disables the security info for the given customerAccountId

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::DisableSecurity  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Saves (creates or updates) the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceDisableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpSecurityServiceDisableSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSecurityInfoResponse**](../Model/UpdateSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceEnableSecurity**
> \iNew\Rest6_1\Model\UpdateSecurityInfoResponse ucpSecurityServiceEnableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user)

enables the security info for the given customerAccountId

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::EnableSecurity  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Pin needs to be provided. Note: Creates the security info if it doesn't already exist, using the provided pin/token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceEnableSecurity($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpSecurityServiceEnableSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSecurityInfoResponse**](../Model/UpdateSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceGetSecurityStatus**
> \iNew\Rest6_1\Model\GetSecurityStatusResponse ucpSecurityServiceGetSecurityStatus($customer_account_id, $correlation_id, $transaction_id, $user)

gets the security status for the given customerAccountId

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::GetSecurityStatus  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000019 - Unknown customer (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Queries the security status (security enabled / disabled) by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceGetSecurityStatus($customer_account_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpSecurityServiceGetSecurityStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetSecurityStatusResponse**](../Model/GetSecurityStatusResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceInitialPinSetup**
> \iNew\Rest6_1\Model\UpdateSecurityInfoResponse ucpSecurityServiceInitialPinSetup($customer_account_id, $correlation_id, $pin, $transaction_id, $user)

sets up the pin for the given customerAccountId for the first time

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::InitialPinSetup  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001110002 - Role already present (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Saves (creates or updates) the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceInitialPinSetup($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpSecurityServiceInitialPinSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\UpdateSecurityInfoResponse**](../Model/UpdateSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceResetPin**
> \iNew\Rest6_1\Model\ResetSecurityInfoResponse ucpSecurityServiceResetPin($customer_account_id, $correlation_id, $new_pin, $transaction_id, $user)

resets the pin for the given customerAccountId

**Access Restriction:** CRM  **Operation ID:** ucp::SecurityService::ResetPin  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001110003 - No email address configured (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Resets the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$new_pin = "new_pin_example"; // string | the new pin to be set, if not provided the system will generate a new one and notify the customer
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceResetPin($customer_account_id, $correlation_id, $new_pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpSecurityServiceResetPin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **new_pin** | **string**| the new pin to be set, if not provided the system will generate a new one and notify the customer | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\ResetSecurityInfoResponse**](../Model/ResetSecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpSecurityServiceVerifyPin**
> \iNew\Rest6_1\Model\VerifySecurityInfoResponse ucpSecurityServiceVerifyPin($customer_account_id, $correlation_id, $pin, $transaction_id, $user)

verifies the pin for the given customerAccountId

**Access Restriction:** SELF_CARE  **Operation ID:** ucp::SecurityService::VerifyPin  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1001000002 - Database error (server error HTTP Status 500)   1001000021 - Invalid security code (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)  **Notes:**   Verifies the security PIN by the given request.<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$pin = "pin_example"; // string | the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->ucpSecurityServiceVerifyPin($customer_account_id, $correlation_id, $pin, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->ucpSecurityServiceVerifyPin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **pin** | **string**| the customer pin, is needed if the customer has enabled security and the request comes from self care (if left empty will not be verified, except for Online Payment use cases) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\VerifySecurityInfoResponse**](../Model/VerifySecurityInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vmsSubscriberServiceGetSubscriberBoxState**
> \iNew\Rest6_1\Model\GetSubscriberBoxStateResponse vmsSubscriberServiceGetSubscriberBoxState($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user)

retrieves the voice mail box state

**Access Restriction:** SELF_CARE  **Operation ID:** vms::SubscriberService::GetSubscriberBoxState  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1026000001 - the voice mail box is blocked (client error HTTP Status 400)   1026000002 - a fraud attempt was detected (client error HTTP Status 400)   1026000003 - the voice mail box does not have a pin (client error HTTP Status 400)   1026000004 - the requested voice mail box does not exist (server error HTTP Status 500)   1026000005 - does not exist (client error HTTP Status 400)   1026000006 - perisitence error (server error HTTP Status 500)   1026000007 - the voice mail box could not be provisioned (server error HTTP Status 500)   1026000008 - unknown error (client error HTTP Status 400)   1026000009 - the voice mail box is full (client error HTTP Status 400)   1026000010 - the voice mail box is in an invalid state (client error HTTP Status 400)  **Notes:**   retrieves the voice mail box state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->vmsSubscriberServiceGetSubscriberBoxState($customer_account_id, $subscription_id, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->vmsSubscriberServiceGetSubscriberBoxState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\GetSubscriberBoxStateResponse**](../Model/GetSubscriberBoxStateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vmsSubscriberServiceSetSubscriberBoxState**
> \iNew\Rest6_1\Model\SetSubscriberBoxStateResponse vmsSubscriberServiceSetSubscriberBoxState($customer_account_id, $subscription_id, $new_state, $correlation_id, $transaction_id, $user)

sets the voice mail box state

**Access Restriction:** SELF_CARE  **Operation ID:** vms::SubscriberService::SetSubscriberBoxState  **Possible response codes:**   0 - OK (successful HTTP Status 200)   1000000000 - unknown response (server error HTTP Status 500)   1000000001 - access denied (client error HTTP Status 400)   1024020001 - Service is not reachable (server error HTTP Status 500)   1024020002 - Service did not respond in time (server error HTTP Status 500)   1024020003 - Service API Version mismatch (server error HTTP Status 500)   1024020004 - Service reference lookup failed (server error HTTP Status 500)   1024020005 - The response class is not applicable (server error HTTP Status 500)   1024030001 - Request is invalid (client error HTTP Status 400)   1024030002 - internal error (server error HTTP Status 500)   1024039999 - unknown ORA error (server error HTTP Status 500)   1026000001 - the voice mail box is blocked (client error HTTP Status 400)   1026000002 - a fraud attempt was detected (client error HTTP Status 400)   1026000003 - the voice mail box does not have a pin (client error HTTP Status 400)   1026000004 - the requested voice mail box does not exist (server error HTTP Status 500)   1026000005 - does not exist (client error HTTP Status 400)   1026000006 - perisitence error (server error HTTP Status 500)   1026000007 - the voice mail box could not be provisioned (server error HTTP Status 500)   1026000008 - unknown error (client error HTTP Status 400)   1026000009 - the voice mail box is full (client error HTTP Status 400)   1026000010 - the voice mail box is in an invalid state (client error HTTP Status 400)  **Notes:**   sets the voice mail box state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKey('accessKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// iNew\Rest6_1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accessKey', 'Bearer');

$api_instance = new iNew\Rest6_1\Api\CustomerAccountApi();
$customer_account_id = 789; // int | field used to represent the customer identifier, this request is intended for
$subscription_id = 789; // int | the subscription id
$new_state = "new_state_example"; // string | ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.<br>SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.<br>NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent
$correlation_id = "correlation_id_example"; // string | the correlation ID, to match a response with this request (will be generated if not provided)
$transaction_id = "transaction_id_example"; // string | the transaction ID, if this request is part of a transaction that needs to be traceable
$user = "user_example"; // string | the user making the request

try {
    $result = $api_instance->vmsSubscriberServiceSetSubscriberBoxState($customer_account_id, $subscription_id, $new_state, $correlation_id, $transaction_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountApi->vmsSubscriberServiceSetSubscriberBoxState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_account_id** | **int**| field used to represent the customer identifier, this request is intended for |
 **subscription_id** | **int**| the subscription id |
 **new_state** | **string**| ACTIVE - The Voice Mailbox is active and messages can be left. Notifications about missed calls are sent.&lt;br&gt;SUSPENDED - The Voice Mailbox is deactivated, neither messages can be left, nor missed call notifications are sent.&lt;br&gt;NO_LEAVE_MESSAGES - Messages cannot be left, but Notifications about missed calls are sent |
 **correlation_id** | **string**| the correlation ID, to match a response with this request (will be generated if not provided) | [optional]
 **transaction_id** | **string**| the transaction ID, if this request is part of a transaction that needs to be traceable | [optional]
 **user** | **string**| the user making the request | [optional]

### Return type

[**\iNew\Rest6_1\Model\SetSubscriberBoxStateResponse**](../Model/SetSubscriberBoxStateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

