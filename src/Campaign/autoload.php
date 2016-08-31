<?php


 function autoload_688fc0db42e8e3d016e1ffcc07c0dd2e($class)
{
    $classes = array(
        'mbzCampaign\CampaignWebService' => __DIR__ .'/CampaignWebService.php',
        'mbzCampaign\CreateCampaign' => __DIR__ .'/CreateCampaign.php',
        'mbzCampaign\CampaignParameters' => __DIR__ .'/CampaignParameters.php',
        'mbzCampaign\ECampMode' => __DIR__ .'/ECampMode.php',
        'mbzCampaign\ECampType' => __DIR__ .'/ECampType.php',
        'mbzCampaign\CreateCampaignResponse' => __DIR__ .'/CreateCampaignResponse.php',
        'mbzCampaign\Campaign' => __DIR__ .'/Campaign.php',
        'mbzCampaign\SchedulingInfos' => __DIR__ .'/SchedulingInfos.php',
        'mbzCampaign\MindbazAuthHeader' => __DIR__ .'/MindbazAuthHeader.php',
        'mbzCampaign\UpdateCampaign' => __DIR__ .'/UpdateCampaign.php',
        'mbzCampaign\UpdateCampaignResponse' => __DIR__ .'/UpdateCampaignResponse.php',
        'mbzCampaign\GetCampaignParameters' => __DIR__ .'/GetCampaignParameters.php',
        'mbzCampaign\GetCampaignParametersResponse' => __DIR__ .'/GetCampaignParametersResponse.php',
        'mbzCampaign\GetCampaign' => __DIR__ .'/GetCampaign.php',
        'mbzCampaign\GetCampaignResponse' => __DIR__ .'/GetCampaignResponse.php',
        'mbzCampaign\DeleteCampaign' => __DIR__ .'/DeleteCampaign.php',
        'mbzCampaign\DeleteCampaignResponse' => __DIR__ .'/DeleteCampaignResponse.php',
        'mbzCampaign\DuplicateCampaign' => __DIR__ .'/DuplicateCampaign.php',
        'mbzCampaign\DuplicateCampaignResponse' => __DIR__ .'/DuplicateCampaignResponse.php',
        'mbzCampaign\UpdateCampaignMessage' => __DIR__ .'/UpdateCampaignMessage.php',
        'mbzCampaign\UpdateCampaignMessageResponse' => __DIR__ .'/UpdateCampaignMessageResponse.php',
        'mbzCampaign\GetSpamScore' => __DIR__ .'/GetSpamScore.php',
        'mbzCampaign\GetSpamScoreResponse' => __DIR__ .'/GetSpamScoreResponse.php',
        'mbzCampaign\SpamScoreInfos' => __DIR__ .'/SpamScoreInfos.php',
        'mbzCampaign\AddSegment' => __DIR__ .'/AddSegment.php',
        'mbzCampaign\SegmentParameters' => __DIR__ .'/SegmentParameters.php',
        'mbzCampaign\AddSegmentResponse' => __DIR__ .'/AddSegmentResponse.php',
        'mbzCampaign\DeleteSegment' => __DIR__ .'/DeleteSegment.php',
        'mbzCampaign\DeleteSegmentResponse' => __DIR__ .'/DeleteSegmentResponse.php',
        'mbzCampaign\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'mbzCampaign\UpdateSegment' => __DIR__ .'/UpdateSegment.php',
        'mbzCampaign\UpdateSegmentResponse' => __DIR__ .'/UpdateSegmentResponse.php',
        'mbzCampaign\ReorganizeSegmentPositions' => __DIR__ .'/ReorganizeSegmentPositions.php',
        'mbzCampaign\ReorganizeSegmentPositionsResponse' => __DIR__ .'/ReorganizeSegmentPositionsResponse.php',
        'mbzCampaign\UpdateSegmentAdvertisement' => __DIR__ .'/UpdateSegmentAdvertisement.php',
        'mbzCampaign\SegmentAdvertisement' => __DIR__ .'/SegmentAdvertisement.php',
        'mbzCampaign\UpdateSegmentAdvertisementResponse' => __DIR__ .'/UpdateSegmentAdvertisementResponse.php',
        'mbzCampaign\GetAllSegments' => __DIR__ .'/GetAllSegments.php',
        'mbzCampaign\GetAllSegmentsResponse' => __DIR__ .'/GetAllSegmentsResponse.php',
        'mbzCampaign\ArrayOfSegment' => __DIR__ .'/ArrayOfSegment.php',
        'mbzCampaign\Segment' => __DIR__ .'/Segment.php',
        'mbzCampaign\ArrayOfSegmentAdvertisement' => __DIR__ .'/ArrayOfSegmentAdvertisement.php',
        'mbzCampaign\GetAllSegmentIds' => __DIR__ .'/GetAllSegmentIds.php',
        'mbzCampaign\GetAllSegmentIdsResponse' => __DIR__ .'/GetAllSegmentIdsResponse.php',
        'mbzCampaign\GetSegment' => __DIR__ .'/GetSegment.php',
        'mbzCampaign\GetSegmentResponse' => __DIR__ .'/GetSegmentResponse.php',
        'mbzCampaign\CountSegment' => __DIR__ .'/CountSegment.php',
        'mbzCampaign\CountSegmentResponse' => __DIR__ .'/CountSegmentResponse.php',
        'mbzCampaign\ArrayOfSegmentCountInfos' => __DIR__ .'/ArrayOfSegmentCountInfos.php',
        'mbzCampaign\SegmentCountInfos' => __DIR__ .'/SegmentCountInfos.php',
        'mbzCampaign\CountAllSegments' => __DIR__ .'/CountAllSegments.php',
        'mbzCampaign\CountAllSegmentsResponse' => __DIR__ .'/CountAllSegmentsResponse.php',
        'mbzCampaign\GetAllTrackedUrls' => __DIR__ .'/GetAllTrackedUrls.php',
        'mbzCampaign\GetAllTrackedUrlsResponse' => __DIR__ .'/GetAllTrackedUrlsResponse.php',
        'mbzCampaign\ArrayOfTrackedUrl' => __DIR__ .'/ArrayOfTrackedUrl.php',
        'mbzCampaign\TrackedUrl' => __DIR__ .'/TrackedUrl.php',
        'mbzCampaign\TrackingParameter' => __DIR__ .'/TrackingParameter.php',
        'mbzCampaign\TrackAll' => __DIR__ .'/TrackAll.php',
        'mbzCampaign\TrackAllResponse' => __DIR__ .'/TrackAllResponse.php',
        'mbzCampaign\TrackUrl' => __DIR__ .'/TrackUrl.php',
        'mbzCampaign\TrackUrlResponse' => __DIR__ .'/TrackUrlResponse.php',
        'mbzCampaign\UntrackUrl' => __DIR__ .'/UntrackUrl.php',
        'mbzCampaign\UntrackUrlResponse' => __DIR__ .'/UntrackUrlResponse.php',
        'mbzCampaign\SendBAT' => __DIR__ .'/SendBAT.php',
        'mbzCampaign\SendBATResponse' => __DIR__ .'/SendBATResponse.php',
        'mbzCampaign\SendSegmentBAT' => __DIR__ .'/SendSegmentBAT.php',
        'mbzCampaign\SendSegmentBATResponse' => __DIR__ .'/SendSegmentBATResponse.php',
        'mbzCampaign\Schedule' => __DIR__ .'/Schedule.php',
        'mbzCampaign\ArrayOfDateTime' => __DIR__ .'/ArrayOfDateTime.php',
        'mbzCampaign\ScheduleResponse' => __DIR__ .'/ScheduleResponse.php',
        'mbzCampaign\Play' => __DIR__ .'/Play.php',
        'mbzCampaign\PlayResponse' => __DIR__ .'/PlayResponse.php',
        'mbzCampaign\Pause' => __DIR__ .'/Pause.php',
        'mbzCampaign\PauseResponse' => __DIR__ .'/PauseResponse.php',
        'mbzCampaign\Stop' => __DIR__ .'/Stop.php',
        'mbzCampaign\StopResponse' => __DIR__ .'/StopResponse.php',
        'mbzCampaign\ListCustom' => __DIR__ .'/ListCustom.php',
        'mbzCampaign\ESortDir' => __DIR__ .'/ESortDir.php',
        'mbzCampaign\ListResponse' => __DIR__ .'/ListResponse.php',
        'mbzCampaign\CampaignListResult' => __DIR__ .'/CampaignListResult.php',
        'mbzCampaign\ArrayOfCampaignListRecords' => __DIR__ .'/ArrayOfCampaignListRecords.php',
        'mbzCampaign\CampaignListRecords' => __DIR__ .'/CampaignListRecords.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_688fc0db42e8e3d016e1ffcc07c0dd2e');

// Do nothing. The rest is just leftovers from the code generation.
{
}