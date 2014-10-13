<?php
return [
  'metadata' =>
  [
    'apiVersion' => '2010-05-15',
    'endpointPrefix' => 'cloudformation',
    'serviceFullName' => 'AWS CloudFormation',
    'signatureVersion' => 'v4',
    'xmlNamespace' => 'http://cloudformation.amazonaws.com/doc/2010-05-15/',
    'protocol' => 'query',
  ],
  'operations' =>
  [
    'CancelUpdateStack' =>
    [
      'name' => 'CancelUpdateStack',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'CancelUpdateStackInput',
      ],
    ],
    'CreateStack' =>
    [
      'name' => 'CreateStack',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'CreateStackInput',
      ],
      'output' =>
      [
        'shape' => 'CreateStackOutput',
        'resultWrapper' => 'CreateStackResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceededException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'AlreadyExistsException',
          'error' =>
          [
            'code' => 'AlreadyExistsException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InsufficientCapabilitiesException',
          'error' =>
          [
            'code' => 'InsufficientCapabilitiesException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteStack' =>
    [
      'name' => 'DeleteStack',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DeleteStackInput',
      ],
    ],
    'DescribeStackEvents' =>
    [
      'name' => 'DescribeStackEvents',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeStackEventsInput',
      ],
      'output' =>
      [
        'shape' => 'DescribeStackEventsOutput',
        'resultWrapper' => 'DescribeStackEventsResult',
      ],
    ],
    'DescribeStackResource' =>
    [
      'name' => 'DescribeStackResource',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeStackResourceInput',
      ],
      'output' =>
      [
        'shape' => 'DescribeStackResourceOutput',
        'resultWrapper' => 'DescribeStackResourceResult',
      ],
    ],
    'DescribeStackResources' =>
    [
      'name' => 'DescribeStackResources',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeStackResourcesInput',
      ],
      'output' =>
      [
        'shape' => 'DescribeStackResourcesOutput',
        'resultWrapper' => 'DescribeStackResourcesResult',
      ],
    ],
    'DescribeStacks' =>
    [
      'name' => 'DescribeStacks',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeStacksInput',
      ],
      'output' =>
      [
        'shape' => 'DescribeStacksOutput',
        'resultWrapper' => 'DescribeStacksResult',
      ],
    ],
    'EstimateTemplateCost' =>
    [
      'name' => 'EstimateTemplateCost',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'EstimateTemplateCostInput',
      ],
      'output' =>
      [
        'shape' => 'EstimateTemplateCostOutput',
        'resultWrapper' => 'EstimateTemplateCostResult',
      ],
    ],
    'GetStackPolicy' =>
    [
      'name' => 'GetStackPolicy',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'GetStackPolicyInput',
      ],
      'output' =>
      [
        'shape' => 'GetStackPolicyOutput',
        'resultWrapper' => 'GetStackPolicyResult',
      ],
    ],
    'GetTemplate' =>
    [
      'name' => 'GetTemplate',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'GetTemplateInput',
      ],
      'output' =>
      [
        'shape' => 'GetTemplateOutput',
        'resultWrapper' => 'GetTemplateResult',
      ],
    ],
    'ListStackResources' =>
    [
      'name' => 'ListStackResources',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ListStackResourcesInput',
      ],
      'output' =>
      [
        'shape' => 'ListStackResourcesOutput',
        'resultWrapper' => 'ListStackResourcesResult',
      ],
    ],
    'ListStacks' =>
    [
      'name' => 'ListStacks',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ListStacksInput',
      ],
      'output' =>
      [
        'shape' => 'ListStacksOutput',
        'resultWrapper' => 'ListStacksResult',
      ],
    ],
    'SetStackPolicy' =>
    [
      'name' => 'SetStackPolicy',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'SetStackPolicyInput',
      ],
    ],
    'UpdateStack' =>
    [
      'name' => 'UpdateStack',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'UpdateStackInput',
      ],
      'output' =>
      [
        'shape' => 'UpdateStackOutput',
        'resultWrapper' => 'UpdateStackResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InsufficientCapabilitiesException',
          'error' =>
          [
            'code' => 'InsufficientCapabilitiesException',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ValidateTemplate' =>
    [
      'name' => 'ValidateTemplate',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ValidateTemplateInput',
      ],
      'output' =>
      [
        'shape' => 'ValidateTemplateOutput',
        'resultWrapper' => 'ValidateTemplateResult',
      ],
    ],
  ],
  'shapes' =>
  [
    'AlreadyExistsException' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'error' =>
      [
        'code' => 'AlreadyExistsException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CancelUpdateStackInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
      ],
    ],
    'Capabilities' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Capability',
      ],
    ],
    'CapabilitiesReason' =>
    [
      'type' => 'string',
    ],
    'Capability' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'CAPABILITY_IAM',
      ],
    ],
    'CreateStackInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'TemplateBody' =>
        [
          'shape' => 'TemplateBody',
        ],
        'TemplateURL' =>
        [
          'shape' => 'TemplateURL',
        ],
        'Parameters' =>
        [
          'shape' => 'Parameters',
        ],
        'DisableRollback' =>
        [
          'shape' => 'DisableRollback',
        ],
        'TimeoutInMinutes' =>
        [
          'shape' => 'TimeoutMinutes',
        ],
        'NotificationARNs' =>
        [
          'shape' => 'NotificationARNs',
        ],
        'Capabilities' =>
        [
          'shape' => 'Capabilities',
        ],
        'OnFailure' =>
        [
          'shape' => 'OnFailure',
        ],
        'StackPolicyBody' =>
        [
          'shape' => 'StackPolicyBody',
        ],
        'StackPolicyURL' =>
        [
          'shape' => 'StackPolicyURL',
        ],
        'Tags' =>
        [
          'shape' => 'Tags',
        ],
      ],
    ],
    'CreateStackOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackId' =>
        [
          'shape' => 'StackId',
        ],
      ],
    ],
    'CreationTime' =>
    [
      'type' => 'timestamp',
    ],
    'DeleteStackInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
      ],
    ],
    'DeletionTime' =>
    [
      'type' => 'timestamp',
    ],
    'DescribeStackEventsInput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'NextToken' =>
        [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'DescribeStackEventsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackEvents' =>
        [
          'shape' => 'StackEvents',
        ],
        'NextToken' =>
        [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'DescribeStackResourceInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
        1 => 'LogicalResourceId',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'LogicalResourceId' =>
        [
          'shape' => 'LogicalResourceId',
        ],
      ],
    ],
    'DescribeStackResourceOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackResourceDetail' =>
        [
          'shape' => 'StackResourceDetail',
        ],
      ],
    ],
    'DescribeStackResourcesInput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'LogicalResourceId' =>
        [
          'shape' => 'LogicalResourceId',
        ],
        'PhysicalResourceId' =>
        [
          'shape' => 'PhysicalResourceId',
        ],
      ],
    ],
    'DescribeStackResourcesOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackResources' =>
        [
          'shape' => 'StackResources',
        ],
      ],
    ],
    'DescribeStacksInput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'NextToken' =>
        [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'DescribeStacksOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Stacks' =>
        [
          'shape' => 'Stacks',
        ],
        'NextToken' =>
        [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'Description' =>
    [
      'type' => 'string',
    ],
    'DisableRollback' =>
    [
      'type' => 'boolean',
    ],
    'EstimateTemplateCostInput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'TemplateBody' =>
        [
          'shape' => 'TemplateBody',
        ],
        'TemplateURL' =>
        [
          'shape' => 'TemplateURL',
        ],
        'Parameters' =>
        [
          'shape' => 'Parameters',
        ],
      ],
    ],
    'EstimateTemplateCostOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Url' =>
        [
          'shape' => 'Url',
        ],
      ],
    ],
    'EventId' =>
    [
      'type' => 'string',
    ],
    'GetStackPolicyInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
      ],
    ],
    'GetStackPolicyOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackPolicyBody' =>
        [
          'shape' => 'StackPolicyBody',
        ],
      ],
    ],
    'GetTemplateInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
      ],
    ],
    'GetTemplateOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'TemplateBody' =>
        [
          'shape' => 'TemplateBody',
        ],
      ],
    ],
    'InsufficientCapabilitiesException' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'error' =>
      [
        'code' => 'InsufficientCapabilitiesException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'LastUpdatedTime' =>
    [
      'type' => 'timestamp',
    ],
    'LimitExceededException' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'error' =>
      [
        'code' => 'LimitExceededException',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ListStackResourcesInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'NextToken' =>
        [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListStackResourcesOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackResourceSummaries' =>
        [
          'shape' => 'StackResourceSummaries',
        ],
        'NextToken' =>
        [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'ListStacksInput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'NextToken' =>
        [
          'shape' => 'NextToken',
        ],
        'StackStatusFilter' =>
        [
          'shape' => 'StackStatusFilter',
        ],
      ],
    ],
    'ListStacksOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackSummaries' =>
        [
          'shape' => 'StackSummaries',
        ],
        'NextToken' =>
        [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'LogicalResourceId' =>
    [
      'type' => 'string',
    ],
    'Metadata' =>
    [
      'type' => 'string',
    ],
    'NextToken' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 1024,
    ],
    'NoEcho' =>
    [
      'type' => 'boolean',
    ],
    'NotificationARN' =>
    [
      'type' => 'string',
    ],
    'NotificationARNs' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'NotificationARN',
      ],
      'max' => 5,
    ],
    'OnFailure' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'DO_NOTHING',
        1 => 'ROLLBACK',
        2 => 'DELETE',
      ],
    ],
    'Output' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'OutputKey' =>
        [
          'shape' => 'OutputKey',
        ],
        'OutputValue' =>
        [
          'shape' => 'OutputValue',
        ],
        'Description' =>
        [
          'shape' => 'Description',
        ],
      ],
    ],
    'OutputKey' =>
    [
      'type' => 'string',
    ],
    'OutputValue' =>
    [
      'type' => 'string',
    ],
    'Outputs' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Output',
      ],
    ],
    'Parameter' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ParameterKey' =>
        [
          'shape' => 'ParameterKey',
        ],
        'ParameterValue' =>
        [
          'shape' => 'ParameterValue',
        ],
        'UsePreviousValue' =>
        [
          'shape' => 'UsePreviousValue',
        ],
      ],
    ],
    'ParameterKey' =>
    [
      'type' => 'string',
    ],
    'ParameterValue' =>
    [
      'type' => 'string',
    ],
    'Parameters' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Parameter',
      ],
    ],
    'PhysicalResourceId' =>
    [
      'type' => 'string',
    ],
    'ResourceProperties' =>
    [
      'type' => 'string',
    ],
    'ResourceStatus' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'CREATE_IN_PROGRESS',
        1 => 'CREATE_FAILED',
        2 => 'CREATE_COMPLETE',
        3 => 'DELETE_IN_PROGRESS',
        4 => 'DELETE_FAILED',
        5 => 'DELETE_COMPLETE',
        6 => 'UPDATE_IN_PROGRESS',
        7 => 'UPDATE_FAILED',
        8 => 'UPDATE_COMPLETE',
      ],
    ],
    'ResourceStatusReason' =>
    [
      'type' => 'string',
    ],
    'ResourceType' =>
    [
      'type' => 'string',
    ],
    'SetStackPolicyInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'StackPolicyBody' =>
        [
          'shape' => 'StackPolicyBody',
        ],
        'StackPolicyURL' =>
        [
          'shape' => 'StackPolicyURL',
        ],
      ],
    ],
    'Stack' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
        1 => 'CreationTime',
        2 => 'StackStatus',
      ],
      'members' =>
      [
        'StackId' =>
        [
          'shape' => 'StackId',
        ],
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'Description' =>
        [
          'shape' => 'Description',
        ],
        'Parameters' =>
        [
          'shape' => 'Parameters',
        ],
        'CreationTime' =>
        [
          'shape' => 'CreationTime',
        ],
        'LastUpdatedTime' =>
        [
          'shape' => 'LastUpdatedTime',
        ],
        'StackStatus' =>
        [
          'shape' => 'StackStatus',
        ],
        'StackStatusReason' =>
        [
          'shape' => 'StackStatusReason',
        ],
        'DisableRollback' =>
        [
          'shape' => 'DisableRollback',
        ],
        'NotificationARNs' =>
        [
          'shape' => 'NotificationARNs',
        ],
        'TimeoutInMinutes' =>
        [
          'shape' => 'TimeoutMinutes',
        ],
        'Capabilities' =>
        [
          'shape' => 'Capabilities',
        ],
        'Outputs' =>
        [
          'shape' => 'Outputs',
        ],
        'Tags' =>
        [
          'shape' => 'Tags',
        ],
      ],
    ],
    'StackEvent' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackId',
        1 => 'EventId',
        2 => 'StackName',
        3 => 'Timestamp',
      ],
      'members' =>
      [
        'StackId' =>
        [
          'shape' => 'StackId',
        ],
        'EventId' =>
        [
          'shape' => 'EventId',
        ],
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'LogicalResourceId' =>
        [
          'shape' => 'LogicalResourceId',
        ],
        'PhysicalResourceId' =>
        [
          'shape' => 'PhysicalResourceId',
        ],
        'ResourceType' =>
        [
          'shape' => 'ResourceType',
        ],
        'Timestamp' =>
        [
          'shape' => 'Timestamp',
        ],
        'ResourceStatus' =>
        [
          'shape' => 'ResourceStatus',
        ],
        'ResourceStatusReason' =>
        [
          'shape' => 'ResourceStatusReason',
        ],
        'ResourceProperties' =>
        [
          'shape' => 'ResourceProperties',
        ],
      ],
    ],
    'StackEvents' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'StackEvent',
      ],
    ],
    'StackId' =>
    [
      'type' => 'string',
    ],
    'StackName' =>
    [
      'type' => 'string',
    ],
    'StackPolicyBody' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 16384,
    ],
    'StackPolicyDuringUpdateBody' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 16384,
    ],
    'StackPolicyDuringUpdateURL' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 1350,
    ],
    'StackPolicyURL' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 1350,
    ],
    'StackResource' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'LogicalResourceId',
        1 => 'ResourceType',
        2 => 'Timestamp',
        3 => 'ResourceStatus',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'StackId' =>
        [
          'shape' => 'StackId',
        ],
        'LogicalResourceId' =>
        [
          'shape' => 'LogicalResourceId',
        ],
        'PhysicalResourceId' =>
        [
          'shape' => 'PhysicalResourceId',
        ],
        'ResourceType' =>
        [
          'shape' => 'ResourceType',
        ],
        'Timestamp' =>
        [
          'shape' => 'Timestamp',
        ],
        'ResourceStatus' =>
        [
          'shape' => 'ResourceStatus',
        ],
        'ResourceStatusReason' =>
        [
          'shape' => 'ResourceStatusReason',
        ],
        'Description' =>
        [
          'shape' => 'Description',
        ],
      ],
    ],
    'StackResourceDetail' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'LogicalResourceId',
        1 => 'ResourceType',
        2 => 'LastUpdatedTimestamp',
        3 => 'ResourceStatus',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'StackId' =>
        [
          'shape' => 'StackId',
        ],
        'LogicalResourceId' =>
        [
          'shape' => 'LogicalResourceId',
        ],
        'PhysicalResourceId' =>
        [
          'shape' => 'PhysicalResourceId',
        ],
        'ResourceType' =>
        [
          'shape' => 'ResourceType',
        ],
        'LastUpdatedTimestamp' =>
        [
          'shape' => 'Timestamp',
        ],
        'ResourceStatus' =>
        [
          'shape' => 'ResourceStatus',
        ],
        'ResourceStatusReason' =>
        [
          'shape' => 'ResourceStatusReason',
        ],
        'Description' =>
        [
          'shape' => 'Description',
        ],
        'Metadata' =>
        [
          'shape' => 'Metadata',
        ],
      ],
    ],
    'StackResourceSummaries' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'StackResourceSummary',
      ],
    ],
    'StackResourceSummary' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'LogicalResourceId',
        1 => 'ResourceType',
        2 => 'LastUpdatedTimestamp',
        3 => 'ResourceStatus',
      ],
      'members' =>
      [
        'LogicalResourceId' =>
        [
          'shape' => 'LogicalResourceId',
        ],
        'PhysicalResourceId' =>
        [
          'shape' => 'PhysicalResourceId',
        ],
        'ResourceType' =>
        [
          'shape' => 'ResourceType',
        ],
        'LastUpdatedTimestamp' =>
        [
          'shape' => 'Timestamp',
        ],
        'ResourceStatus' =>
        [
          'shape' => 'ResourceStatus',
        ],
        'ResourceStatusReason' =>
        [
          'shape' => 'ResourceStatusReason',
        ],
      ],
    ],
    'StackResources' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'StackResource',
      ],
    ],
    'StackStatus' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'CREATE_IN_PROGRESS',
        1 => 'CREATE_FAILED',
        2 => 'CREATE_COMPLETE',
        3 => 'ROLLBACK_IN_PROGRESS',
        4 => 'ROLLBACK_FAILED',
        5 => 'ROLLBACK_COMPLETE',
        6 => 'DELETE_IN_PROGRESS',
        7 => 'DELETE_FAILED',
        8 => 'DELETE_COMPLETE',
        9 => 'UPDATE_IN_PROGRESS',
        10 => 'UPDATE_COMPLETE_CLEANUP_IN_PROGRESS',
        11 => 'UPDATE_COMPLETE',
        12 => 'UPDATE_ROLLBACK_IN_PROGRESS',
        13 => 'UPDATE_ROLLBACK_FAILED',
        14 => 'UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS',
        15 => 'UPDATE_ROLLBACK_COMPLETE',
      ],
    ],
    'StackStatusFilter' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'StackStatus',
      ],
    ],
    'StackStatusReason' =>
    [
      'type' => 'string',
    ],
    'StackSummaries' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'StackSummary',
      ],
    ],
    'StackSummary' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
        1 => 'CreationTime',
        2 => 'StackStatus',
      ],
      'members' =>
      [
        'StackId' =>
        [
          'shape' => 'StackId',
        ],
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'TemplateDescription' =>
        [
          'shape' => 'TemplateDescription',
        ],
        'CreationTime' =>
        [
          'shape' => 'CreationTime',
        ],
        'LastUpdatedTime' =>
        [
          'shape' => 'LastUpdatedTime',
        ],
        'DeletionTime' =>
        [
          'shape' => 'DeletionTime',
        ],
        'StackStatus' =>
        [
          'shape' => 'StackStatus',
        ],
        'StackStatusReason' =>
        [
          'shape' => 'StackStatusReason',
        ],
      ],
    ],
    'Stacks' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Stack',
      ],
    ],
    'Tag' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Key' =>
        [
          'shape' => 'TagKey',
        ],
        'Value' =>
        [
          'shape' => 'TagValue',
        ],
      ],
    ],
    'TagKey' =>
    [
      'type' => 'string',
    ],
    'TagValue' =>
    [
      'type' => 'string',
    ],
    'Tags' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Tag',
      ],
    ],
    'TemplateBody' =>
    [
      'type' => 'string',
      'min' => 1,
    ],
    'TemplateDescription' =>
    [
      'type' => 'string',
    ],
    'TemplateParameter' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ParameterKey' =>
        [
          'shape' => 'ParameterKey',
        ],
        'DefaultValue' =>
        [
          'shape' => 'ParameterValue',
        ],
        'NoEcho' =>
        [
          'shape' => 'NoEcho',
        ],
        'Description' =>
        [
          'shape' => 'Description',
        ],
      ],
    ],
    'TemplateParameters' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'TemplateParameter',
      ],
    ],
    'TemplateURL' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 1024,
    ],
    'TimeoutMinutes' =>
    [
      'type' => 'integer',
      'min' => 1,
    ],
    'Timestamp' =>
    [
      'type' => 'timestamp',
    ],
    'UpdateStackInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'StackName',
      ],
      'members' =>
      [
        'StackName' =>
        [
          'shape' => 'StackName',
        ],
        'TemplateBody' =>
        [
          'shape' => 'TemplateBody',
        ],
        'TemplateURL' =>
        [
          'shape' => 'TemplateURL',
        ],
        'UsePreviousTemplate' =>
        [
          'shape' => 'UsePreviousTemplate',
        ],
        'StackPolicyDuringUpdateBody' =>
        [
          'shape' => 'StackPolicyDuringUpdateBody',
        ],
        'StackPolicyDuringUpdateURL' =>
        [
          'shape' => 'StackPolicyDuringUpdateURL',
        ],
        'Parameters' =>
        [
          'shape' => 'Parameters',
        ],
        'Capabilities' =>
        [
          'shape' => 'Capabilities',
        ],
        'StackPolicyBody' =>
        [
          'shape' => 'StackPolicyBody',
        ],
        'StackPolicyURL' =>
        [
          'shape' => 'StackPolicyURL',
        ],
        'NotificationARNs' =>
        [
          'shape' => 'NotificationARNs',
        ],
      ],
    ],
    'UpdateStackOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'StackId' =>
        [
          'shape' => 'StackId',
        ],
      ],
    ],
    'Url' =>
    [
      'type' => 'string',
    ],
    'UsePreviousTemplate' =>
    [
      'type' => 'boolean',
    ],
    'UsePreviousValue' =>
    [
      'type' => 'boolean',
    ],
    'ValidateTemplateInput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'TemplateBody' =>
        [
          'shape' => 'TemplateBody',
        ],
        'TemplateURL' =>
        [
          'shape' => 'TemplateURL',
        ],
      ],
    ],
    'ValidateTemplateOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Parameters' =>
        [
          'shape' => 'TemplateParameters',
        ],
        'Description' =>
        [
          'shape' => 'Description',
        ],
        'Capabilities' =>
        [
          'shape' => 'Capabilities',
        ],
        'CapabilitiesReason' =>
        [
          'shape' => 'CapabilitiesReason',
        ],
      ],
    ],
  ],
];