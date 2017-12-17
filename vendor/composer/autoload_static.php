<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11b911b17e133b1b4ed974c8c86fc757
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SRAG\\Plugins\\UnibeCalendarCustomGrid\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SRAG\\Plugins\\UnibeCalendarCustomGrid\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ilAppointmentBaseFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilAppointmentBaseFileHandler.php',
        'ilAppointmentBookingPoolFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilAppointmentBookingPoolFileHandler.php',
        'ilAppointmentConsultationHoursFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilAppointmentConsultationHoursFileHandler.php',
        'ilAppointmentCourseFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilAppointmentCourseFileHandler.php',
        'ilAppointmentCustomGridPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilAppointmentCustomGridPlugin.php',
        'ilAppointmentCustomModalPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilAppointmentCustomModalPlugin.php',
        'ilAppointmentDummyFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilAppointmentDummyFileHandler.php',
        'ilAppointmentExerciseFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilAppointmentExerciseFileHandler.php',
        'ilAppointmentFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/interfaces/interface.ilAppointmentFileHandler.php',
        'ilAppointmentFileHandlerFactory' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilAppointmentFileHandlerFactory.php',
        'ilAppointmentPresentationBookingPoolGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationBookingPoolGUI.php',
        'ilAppointmentPresentationConsultationHoursGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationConsultationHoursGUI.php',
        'ilAppointmentPresentationCourseGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationCourseGUI.php',
        'ilAppointmentPresentationExerciseGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationExerciseGUI.php',
        'ilAppointmentPresentationFactory' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationFactory.php',
        'ilAppointmentPresentationGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationGUI.php',
        'ilAppointmentPresentationGroupGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationGroupGUI.php',
        'ilAppointmentPresentationMilestoneGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationMilestoneGUI.php',
        'ilAppointmentPresentationPublicGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationPublicGUI.php',
        'ilAppointmentPresentationSessionGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationSessionGUI.php',
        'ilAppointmentPresentationUserGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/AppointmentPresentation/class.ilAppointmentPresentationUserGUI.php',
        'ilAppointmentSessionFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilAppointmentSessionFileHandler.php',
        'ilAuthCalendar' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilAuthCalendar.php',
        'ilAuthCalendarToken' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilAuthCalendarToken.php',
        'ilAuthContainerCalendarToken' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilAuthContainerCalendarToken.php',
        'ilCalCategoriesInitializedMultipleException' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/exceptions/class.ilCalCategoriesInitializedMultipleException.php',
        'ilCalCategoriesNotInitializedException' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/exceptions/class.ilCalCategoriesNotInitializedException.php',
        'ilCalFileZipJob' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilCalFileZipJob.php',
        'ilCalendarActions' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarActions.php',
        'ilCalendarAgendaListGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/Agenda/class.ilCalendarAgendaListGUI.php',
        'ilCalendarAppEventListener' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarAppEventListener.php',
        'ilCalendarAppointmentBaseFactory' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/Appointment/class.ilCalendarAppointmentBaseFactory.php',
        'ilCalendarAppointmentColors' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarAppointmentColors.php',
        'ilCalendarAppointmentGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarAppointmentGUI.php',
        'ilCalendarAppointmentPanelGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarAppointmentPanelGUI.php',
        'ilCalendarAppointmentPresentation' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/interfaces/interface.ilCalendarAppointmentPresentation.php',
        'ilCalendarAppointmentPresentationGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarAppointmentPresentationGUI.php',
        'ilCalendarAppointmentTemplate' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarAppointmentTemplate.php',
        'ilCalendarAppointmentsTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarAppointmentsTableGUI.php',
        'ilCalendarAuthenticationToken' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarAuthenticationToken.php',
        'ilCalendarBlockGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarBlockGUI.php',
        'ilCalendarCache' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarCache.php',
        'ilCalendarCategories' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarCategories.php',
        'ilCalendarCategory' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarCategory.php',
        'ilCalendarCategoryAssignments' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarCategoryAssignments.php',
        'ilCalendarCategoryGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarCategoryGUI.php',
        'ilCalendarCategoryTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarCategoryTableGUI.php',
        'ilCalendarChangedAppointmentsTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarChangedAppointmentsTableGUI.php',
        'ilCalendarCopyDefinition' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/BackgroundTasks/class.ilCalendarCopyDefinition.php',
        'ilCalendarCopyFilesToTempDirectoryJob' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/BackgroundTasks/class.ilCalendarCopyFilesToTempDirectoryJob.php',
        'ilCalendarDataSet' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarDataSet.php',
        'ilCalendarDayGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarDayGUI.php',
        'ilCalendarDownloadZipInteraction' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/BackgroundTasks/class.ilCalendarDownloadZipInteraction.php',
        'ilCalendarEntry' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarEntry.php',
        'ilCalendarExport' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/Export/class.ilCalendarExport.php',
        'ilCalendarExporter' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarExporter.php',
        'ilCalendarFileHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/FileHandler/class.ilCalendarFileHandler.php',
        'ilCalendarHeaderNavigationGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarHeaderNavigationGUI.php',
        'ilCalendarImporter' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarImporter.php',
        'ilCalendarInboxGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarInboxGUI.php',
        'ilCalendarInboxSharedTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarInboxSharedTableGUI.php',
        'ilCalendarMailNotification' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarMailNotification.php',
        'ilCalendarManageTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarManageTableGUI.php',
        'ilCalendarMonthGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarMonthGUI.php',
        'ilCalendarPresentationGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarPresentationGUI.php',
        'ilCalendarRecurrence' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRecurrence.php',
        'ilCalendarRecurrenceCalculation' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/interfaces/interface.ilCalendarRecurrenceCalculation.php',
        'ilCalendarRecurrenceCalculator' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRecurrenceCalculator.php',
        'ilCalendarRecurrenceExclusion' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRecurrenceExclusion.php',
        'ilCalendarRecurrenceExclusions' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRecurrenceExclusions.php',
        'ilCalendarRecurrenceGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRecurrenceGUI.php',
        'ilCalendarRecurrences' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRecurrences.php',
        'ilCalendarRegistration' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRegistration.php',
        'ilCalendarRemoteAccessHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRemoteAccessHandler.php',
        'ilCalendarRemoteReader' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarRemoteReader.php',
        'ilCalendarSchedule' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarSchedule.php',
        'ilCalendarScheduleFilter' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/interfaces/interface.ilCalendarScheduleFilter.php',
        'ilCalendarScheduleFilterBookings' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarScheduleFilterBookings.php',
        'ilCalendarScheduleFilterExercise' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarScheduleFilterExercise.php',
        'ilCalendarScheduleFilterHidden' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarScheduleFilterHidden.php',
        'ilCalendarSelectionBlockGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarSelectionBlockGUI.php',
        'ilCalendarService' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarService.php',
        'ilCalendarSettings' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarSettings.php',
        'ilCalendarShared' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarShared.php',
        'ilCalendarSharedListTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarSharedListTableGUI.php',
        'ilCalendarSharedRoleListTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarSharedRoleListTableGUI.php',
        'ilCalendarSharedStatus' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarSharedStatus.php',
        'ilCalendarSharedUserListTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarSharedUserListTableGUI.php',
        'ilCalendarSubscriptionGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarSubscriptionGUI.php',
        'ilCalendarUserNotification' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarUserNotification.php',
        'ilCalendarUserSettings' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarUserSettings.php',
        'ilCalendarUserSettingsGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarUserSettingsGUI.php',
        'ilCalendarUtil' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarUtil.php',
        'ilCalendarViewGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarViewGUI.php',
        'ilCalendarVisibility' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarVisibility.php',
        'ilCalendarWeekGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilCalendarWeekGUI.php',
        'ilCalendarZipJob' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/BackgroundTasks/class.ilCalendarZipJob.php',
        'ilConsultationHourAppointments' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHourAppointments.php',
        'ilConsultationHourBookingTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHourBookingTableGUI.php',
        'ilConsultationHourCron' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHourCron.php',
        'ilConsultationHourGroup' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHourGroup.php',
        'ilConsultationHourGroupTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHourGroupTableGUI.php',
        'ilConsultationHourGroups' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHourGroups.php',
        'ilConsultationHourUtils' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHourUtils.php',
        'ilConsultationHoursGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHoursGUI.php',
        'ilConsultationHoursTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/ConsultationHours/class.ilConsultationHoursTableGUI.php',
        'ilCountPDFPagesPreProcessors' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/PreProcessors/class.ilCountPDFPagesPreProcessors.php',
        'ilDate' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDate.php',
        'ilDateList' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDateList.php',
        'ilDatePeriod' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/interfaces/interface.ilDatePeriod.php',
        'ilDatePresentation' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDatePresentation.php',
        'ilDateTime' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDateTime.php',
        'ilDateTimeException' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDateTimeException.php',
        'ilDownloadFilesBackgroundTask' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/BackgroundTasks/class.ilDownloadFilesBackgroundTask.php',
        'ilECSFileSettings' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilECSFileSettings.php',
        'ilEventItems' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilEventItems.php',
        'ilEventParticipants' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilEventParticipants.php',
        'ilEventRecurrence' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilEventRecurrence.php',
        'ilFSStorageFile' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFSStorageFile.php',
        'ilFSStorageSession' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilFSStorageSession.php',
        'ilFileException' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFileException.php',
        'ilFileExporter' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFileExporter.php',
        'ilFileImporter' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFileImporter.php',
        'ilFileLP' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFileLP.php',
        'ilFileNewsRendererGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFileNewsRendererGUI.php',
        'ilFileVersionTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFileVersionTableGUI.php',
        'ilFileXMLParser' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFileXMLParser.php',
        'ilFileXMLWriter' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilFileXMLWriter.php',
        'ilICalComponent' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/iCal/class.ilICalComponent.php',
        'ilICalItem' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/iCal/class.ilICalItem.php',
        'ilICalParameter' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/iCal/class.ilICalParameter.php',
        'ilICalParser' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/iCal/class.ilICalParser.php',
        'ilICalParserException' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/exceptions/class.ilICalParserException.php',
        'ilICalProperty' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/iCal/class.ilICalProperty.php',
        'ilICalUtils' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/iCal/class.ilICalUtils.php',
        'ilICalValue' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/iCal/class.ilICalValue.php',
        'ilICalWriter' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/iCal/class.ilICalWriter.php',
        'ilMilestoneResponsiblesTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilMilestoneResponsiblesTableGUI.php',
        'ilMiniCalendarGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilMiniCalendarGUI.php',
        'ilObjCalendarSettings' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilObjCalendarSettings.php',
        'ilObjCalendarSettingsAccess' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilObjCalendarSettingsAccess.php',
        'ilObjCalendarSettingsGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilObjCalendarSettingsGUI.php',
        'ilObjFile' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilObjFile.php',
        'ilObjFileAccess' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilObjFileAccess.php',
        'ilObjFileGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilObjFileGUI.php',
        'ilObjFileListGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/File/classes/class.ilObjFileListGUI.php',
        'ilObjSession' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilObjSession.php',
        'ilObjSessionAccess' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilObjSessionAccess.php',
        'ilObjSessionGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilObjSessionGUI.php',
        'ilObjSessionListGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilObjSessionListGUI.php',
        'ilPDCalendarBlockGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilPDCalendarBlockGUI.php',
        'ilRecurrenceInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/Form/class.ilRecurrenceInputGUI.php',
        'ilSessionAppointment' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionAppointment.php',
        'ilSessionDataSet' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionDataSet.php',
        'ilSessionExporter' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionExporter.php',
        'ilSessionFile' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionFile.php',
        'ilSessionFileTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionFileTableGUI.php',
        'ilSessionImporter' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionImporter.php',
        'ilSessionLP' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionLP.php',
        'ilSessionMaterialsTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionMaterialsTableGUI.php',
        'ilSessionMembershipGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionMembershipGUI.php',
        'ilSessionMembershipMailNotification' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionMembershipMailNotification.php',
        'ilSessionMembershipRegistrationSettingsGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionMembershipRegistrationSettingsGUI.php',
        'ilSessionObjectListGUIFactory' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionObjectListGUIFactory.php',
        'ilSessionOverviewGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionOverviewGUI.php',
        'ilSessionOverviewTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionOverviewTableGUI.php',
        'ilSessionParticipants' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionParticipants.php',
        'ilSessionParticipantsTableGUI' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionParticipantsTableGUI.php',
        'ilSessionRecurrence' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionRecurrence.php',
        'ilSessionWaitingList' => __DIR__ . '/../..' . '/../../../../../../../Modules/Session/classes/class.ilSessionWaitingList.php',
        'ilTimeZone' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilTimeZone.php',
        'ilTimeZoneException' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilTimeZoneException.php',
        'ilUnibeCalendarCustomGridPlugin' => __DIR__ . '/../..' . '/classes/class.ilUnibeCalendarCustomGridPlugin.php',
        'ilUnibeFileHandlerGUI' => __DIR__ . '/../..' . '/classes/class.ilUnibeFileHandlerGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11b911b17e133b1b4ed974c8c86fc757::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11b911b17e133b1b4ed974c8c86fc757::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11b911b17e133b1b4ed974c8c86fc757::$classMap;

        }, null, ClassLoader::class);
    }
}
