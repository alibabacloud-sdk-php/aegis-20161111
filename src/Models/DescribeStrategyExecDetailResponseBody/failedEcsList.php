<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeStrategyExecDetailResponseBody;

use AlibabaCloud\Tea\Model;

class failedEcsList extends Model
{
    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'internetIp'   => 'InternetIp',
        'instanceName' => 'InstanceName',
        'IP'           => 'IP',
        'intranetIp'   => 'IntranetIp',
        'reason'       => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedEcsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
