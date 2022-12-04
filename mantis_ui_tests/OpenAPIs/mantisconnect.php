<?xml version="1.0" encoding="ISO-8859-1"?>
<?xml-stylesheet type="text/xsl" href="wsdl-viewer.xsl"?>
<definitions xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns:tns="http://futureware.biz/mantisconnect" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns="http://schemas.xmlsoap.org/wsdl/" targetNamespace="http://futureware.biz/mantisconnect">
<types>
<xsd:schema targetNamespace="http://futureware.biz/mantisconnect">
 <xsd:import namespace="http://schemas.xmlsoap.org/soap/encoding/"/>
 <xsd:import namespace="http://schemas.xmlsoap.org/wsdl/"/>
 <xsd:complexType name="IntegerArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:integer[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="StringArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="ObjectRef">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="name" type="xsd:string" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ObjectRefArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:ObjectRef[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="AccountData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="name" type="xsd:string" minOccurs="0"/>
   <xsd:element name="real_name" type="xsd:string" minOccurs="0"/>
   <xsd:element name="email" type="xsd:string" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="UserData">
  <xsd:all>
   <xsd:element name="account_data" type="tns:AccountData" minOccurs="0"/>
   <xsd:element name="access_level" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="timezone" type="xsd:string" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="AccountDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:AccountData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="AttachmentData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="filename" type="xsd:string" minOccurs="0"/>
   <xsd:element name="size" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="content_type" type="xsd:string" minOccurs="0"/>
   <xsd:element name="date_submitted" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="download_url" type="xsd:anyURI" minOccurs="0"/>
   <xsd:element name="user_id" type="xsd:integer" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="AttachmentDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:AttachmentData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="ProjectAttachmentData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="filename" type="xsd:string" minOccurs="0"/>
   <xsd:element name="title" type="xsd:string" minOccurs="0"/>
   <xsd:element name="description" type="xsd:string" minOccurs="0"/>
   <xsd:element name="size" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="content_type" type="xsd:string" minOccurs="0"/>
   <xsd:element name="date_submitted" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="download_url" type="xsd:anyURI" minOccurs="0"/>
   <xsd:element name="user_id" type="xsd:integer" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ProjectAttachmentDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:ProjectAttachmentData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="RelationshipData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="type" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="target_id" type="xsd:integer" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="RelationshipDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:RelationshipData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="IssueNoteData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="reporter" type="tns:AccountData" minOccurs="0"/>
   <xsd:element name="text" type="xsd:string" minOccurs="0"/>
   <xsd:element name="view_state" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="date_submitted" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="last_modified" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="time_tracking" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="note_type" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="note_attr" type="xsd:string" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="IssueNoteDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:IssueNoteData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="IssueData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="view_state" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="last_updated" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="project" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="category" type="xsd:string" minOccurs="0"/>
   <xsd:element name="priority" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="severity" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="status" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="reporter" type="tns:AccountData" minOccurs="0"/>
   <xsd:element name="summary" type="xsd:string" minOccurs="0"/>
   <xsd:element name="version" type="xsd:string" minOccurs="0"/>
   <xsd:element name="build" type="xsd:string" minOccurs="0"/>
   <xsd:element name="platform" type="xsd:string" minOccurs="0"/>
   <xsd:element name="os" type="xsd:string" minOccurs="0"/>
   <xsd:element name="os_build" type="xsd:string" minOccurs="0"/>
   <xsd:element name="reproducibility" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="date_submitted" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="sponsorship_total" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="handler" type="tns:AccountData" minOccurs="0"/>
   <xsd:element name="projection" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="eta" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="resolution" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="fixed_in_version" type="xsd:string" minOccurs="0"/>
   <xsd:element name="target_version" type="xsd:string" minOccurs="0"/>
   <xsd:element name="description" type="xsd:string" minOccurs="0"/>
   <xsd:element name="steps_to_reproduce" type="xsd:string" minOccurs="0"/>
   <xsd:element name="additional_information" type="xsd:string" minOccurs="0"/>
   <xsd:element name="attachments" type="tns:AttachmentDataArray" minOccurs="0"/>
   <xsd:element name="relationships" type="tns:RelationshipDataArray" minOccurs="0"/>
   <xsd:element name="notes" type="tns:IssueNoteDataArray" minOccurs="0"/>
   <xsd:element name="custom_fields" type="tns:CustomFieldValueForIssueDataArray" minOccurs="0"/>
   <xsd:element name="due_date" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="monitors" type="tns:AccountDataArray" minOccurs="0"/>
   <xsd:element name="sticky" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="tags" type="tns:ObjectRefArray" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="IssueDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:IssueData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="HistoryData">
  <xsd:all>
   <xsd:element name="date" type="xsd:integer"/>
   <xsd:element name="userid" type="xsd:integer"/>
   <xsd:element name="username" type="xsd:string"/>
   <xsd:element name="field" type="xsd:string"/>
   <xsd:element name="type" type="xsd:integer"/>
   <xsd:element name="old_value" type="xsd:string"/>
   <xsd:element name="new_value" type="xsd:string"
   />
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="HistoryDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:HistoryData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="IssueHeaderData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer"/>
   <xsd:element name="view_state" type="xsd:integer"/>
   <xsd:element name="last_updated" type="xsd:dateTime"/>
   <xsd:element name="project" type="xsd:integer"/>
   <xsd:element name="category" type="xsd:string"/>
   <xsd:element name="priority" type="xsd:integer"/>
   <xsd:element name="severity" type="xsd:integer"/>
   <xsd:element name="status" type="xsd:integer"/>
   <xsd:element name="reporter" type="xsd:integer"/>
   <xsd:element name="summary" type="xsd:string"/>
   <xsd:element name="handler" type="xsd:integer"/>
   <xsd:element name="resolution" type="xsd:integer"/>
   <xsd:element name="attachments_count" type="xsd:integer"/>
   <xsd:element name="notes_count" type="xsd:integer"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="IssueHeaderDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:IssueHeaderData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="ProjectData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="name" type="xsd:string" minOccurs="0"/>
   <xsd:element name="status" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="enabled" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="view_state" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="access_min" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="file_path" type="xsd:string" minOccurs="0"/>
   <xsd:element name="description" type="xsd:string" minOccurs="0"/>
   <xsd:element name="subprojects" type="tns:ProjectDataArray" minOccurs="0"/>
   <xsd:element name="inherit_global" type="xsd:boolean" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ProjectDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:ProjectData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="ProjectVersionData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="name" type="xsd:string" minOccurs="0"/>
   <xsd:element name="project_id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="date_order" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="description" type="xsd:string" minOccurs="0"/>
   <xsd:element name="released" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="obsolete" type="xsd:boolean" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ProjectVersionDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:ProjectVersionData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="FilterData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="owner" type="tns:AccountData" minOccurs="0"/>
   <xsd:element name="project_id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="is_public" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="name" type="xsd:string" minOccurs="0"/>
   <xsd:element name="filter_string" type="xsd:string" minOccurs="0"/>
   <xsd:element name="url" type="xsd:string" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="FilterSearchData">
  <xsd:all>
   <xsd:element name="project_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="search" type="xsd:string" minOccurs="0"/>
   <xsd:element name="category" type="tns:StringArray" minOccurs="0"/>
   <xsd:element name="severity_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="status_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="priority_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="reporter_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="handler_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="note_user_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="resolution_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="product_version" type="tns:StringArray" minOccurs="0"/>
   <xsd:element name="user_monitor_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="hide_status_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="sort" type="xsd:string" minOccurs="0"/>
   <xsd:element name="sort_direction" type="xsd:string" minOccurs="0"/>
   <xsd:element name="sticky" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="view_state_id" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="fixed_in_version" type="tns:StringArray" minOccurs="0"/>
   <xsd:element name="target_version" type="tns:StringArray" minOccurs="0"/>
   <xsd:element name="platform" type="tns:StringArray" minOccurs="0"/>
   <xsd:element name="os" type="tns:StringArray" minOccurs="0"/>
   <xsd:element name="os_build" type="tns:StringArray" minOccurs="0"/>
   <xsd:element name="start_day" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="start_month" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="start_year" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="end_day" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="end_month" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="end_year" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="last_update_start_day" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="last_update_start_month" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="last_update_start_year" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="last_update_end_day" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="last_update_end_month" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="last_update_end_year" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="tag_string" type="tns:StringArray" minOccurs="0"/>
   <xsd:element name="tag_select" type="tns:IntegerArray" minOccurs="0"/>
   <xsd:element name="custom_fields" type="tns:FilterCustomFieldArray" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="FilterDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:FilterData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="CustomFieldDefinitionData">
  <xsd:all>
   <xsd:element name="field" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="type" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="possible_values" type="xsd:string" minOccurs="0"/>
   <xsd:element name="default_value" type="xsd:string" minOccurs="0"/>
   <xsd:element name="valid_regexp" type="xsd:string" minOccurs="0"/>
   <xsd:element name="access_level_r" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="access_level_rw" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="length_min" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="length_max" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="advanced" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="display_report" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="display_update" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="display_resolved" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="display_closed" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="require_report" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="require_update" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="require_resolved" type="xsd:boolean" minOccurs="0"/>
   <xsd:element name="require_closed" type="xsd:boolean" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="FilterCustomField">
  <xsd:all>
   <xsd:element name="field" type="tns:ObjectRef" minOccurs="1"/>
   <xsd:element name="value" type="tns:StringArray" minOccurs="1"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="FilterCustomFieldArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:FilterCustomField[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="CustomFieldDefinitionDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:CustomFieldDefinitionData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="CustomFieldLinkForProjectData">
  <xsd:all>
   <xsd:element name="field" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="sequence" type="xsd:byte" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CustomFieldLinkForProjectDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:CustomFieldLinkForProjectData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="CustomFieldValueForIssueData">
  <xsd:all>
   <xsd:element name="field" type="tns:ObjectRef" minOccurs="0"/>
   <xsd:element name="value" type="xsd:string" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="CustomFieldValueForIssueDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:CustomFieldValueForIssueData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="TagData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="user_id" type="tns:AccountData" minOccurs="0"/>
   <xsd:element name="name" type="xsd:string" minOccurs="0"/>
   <xsd:element name="description" type="xsd:string" minOccurs="0"/>
   <xsd:element name="date_created" type="xsd:dateTime" minOccurs="0"/>
   <xsd:element name="date_updated" type="xsd:dateTime" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="TagDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:TagData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="TagDataSearchResult">
  <xsd:all>
   <xsd:element name="results" type="tns:TagDataArray" minOccurs="0"/>
   <xsd:element name="total_results" type="xsd:integer" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ProfileData">
  <xsd:all>
   <xsd:element name="id" type="xsd:integer" minOccurs="0"/>
   <xsd:element name="user_id" type="tns:AccountData" minOccurs="0"/>
   <xsd:element name="platform" type="xsd:string" minOccurs="0"/>
   <xsd:element name="os" type="xsd:string" minOccurs="0"/>
   <xsd:element name="os_build" type="xsd:string" minOccurs="0"/>
   <xsd:element name="description" type="xsd:string" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="ProfileDataArray">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:ProfileData[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="ProfileDataSearchResult">
  <xsd:all>
   <xsd:element name="results" type="tns:ProfileDataArray" minOccurs="0"/>
   <xsd:element name="total_results" type="xsd:integer" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
</xsd:schema>
</types>
<message name="mc_versionRequest"></message>
<message name="mc_versionResponse">
  <part name="return" type="xsd:string" /></message>
<message name="mc_loginRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_loginResponse">
  <part name="return" type="tns:UserData" /></message>
<message name="mc_enum_statusRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_statusResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_prioritiesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_prioritiesResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_severitiesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_severitiesResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_reproducibilitiesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_reproducibilitiesResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_projectionsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_projectionsResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_etasRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_etasResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_resolutionsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_resolutionsResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_access_levelsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_access_levelsResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_project_statusRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_project_statusResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_project_view_statesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_project_view_statesResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_view_statesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_view_statesResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_custom_field_typesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_enum_custom_field_typesResponse">
  <part name="return" type="tns:ObjectRefArray" /></message>
<message name="mc_enum_getRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="enumeration" type="xsd:string" /></message>
<message name="mc_enum_getResponse">
  <part name="return" type="xsd:string" /></message>
<message name="mc_issue_existsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" /></message>
<message name="mc_issue_existsResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_issue_getRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" /></message>
<message name="mc_issue_getResponse">
  <part name="return" type="tns:IssueData" /></message>
<message name="mc_issues_getRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_ids" type="tns:IntegerArray" /></message>
<message name="mc_issues_getResponse">
  <part name="return" type="tns:IssueDataArray" /></message>
<message name="mc_issues_get_headerRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_ids" type="tns:IntegerArray" /></message>
<message name="mc_issues_get_headerResponse">
  <part name="return" type="tns:IssueHeaderDataArray" /></message>
<message name="mc_issue_get_historyRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" /></message>
<message name="mc_issue_get_historyResponse">
  <part name="return" type="tns:HistoryDataArray" /></message>
<message name="mc_issue_get_biggest_idRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_issue_get_biggest_idResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_issue_get_id_from_summaryRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="summary" type="xsd:string" /></message>
<message name="mc_issue_get_id_from_summaryResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_issue_addRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue" type="tns:IssueData" /></message>
<message name="mc_issue_addResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_issue_updateRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issueId" type="xsd:integer" />
  <part name="issue" type="tns:IssueData" /></message>
<message name="mc_issue_updateResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_issue_set_tagsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" />
  <part name="tags" type="tns:TagDataArray" /></message>
<message name="mc_issue_set_tagsResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_issue_deleteRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" /></message>
<message name="mc_issue_deleteResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_issue_note_addRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" />
  <part name="note" type="tns:IssueNoteData" /></message>
<message name="mc_issue_note_addResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_issue_note_deleteRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_note_id" type="xsd:integer" /></message>
<message name="mc_issue_note_deleteResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_issue_note_updateRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="note" type="tns:IssueNoteData" /></message>
<message name="mc_issue_note_updateResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_issue_relationship_addRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" />
  <part name="relationship" type="tns:RelationshipData" /></message>
<message name="mc_issue_relationship_addResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_issue_relationship_deleteRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" />
  <part name="relationship_id" type="xsd:integer" /></message>
<message name="mc_issue_relationship_deleteResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_issue_attachment_addRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" />
  <part name="name" type="xsd:string" />
  <part name="file_type" type="xsd:string" />
  <part name="content" type="xsd:base64Binary" /></message>
<message name="mc_issue_attachment_addResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_issue_attachment_deleteRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_attachment_id" type="xsd:integer" /></message>
<message name="mc_issue_attachment_deleteResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_issue_attachment_getRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_attachment_id" type="xsd:integer" /></message>
<message name="mc_issue_attachment_getResponse">
  <part name="return" type="xsd:base64Binary" /></message>
<message name="mc_project_addRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project" type="tns:ProjectData" /></message>
<message name="mc_project_addResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_project_deleteRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_project_deleteResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_project_updateRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="project" type="tns:ProjectData" /></message>
<message name="mc_project_updateResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_project_get_id_from_nameRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_name" type="xsd:string" /></message>
<message name="mc_project_get_id_from_nameResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_project_get_issues_for_userRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="filter_type" type="xsd:string" />
  <part name="target_user" type="tns:AccountData" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_project_get_issues_for_userResponse">
  <part name="return" type="tns:IssueDataArray" /></message>
<message name="mc_project_get_issuesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_project_get_issuesResponse">
  <part name="return" type="tns:IssueDataArray" /></message>
<message name="mc_project_get_issue_headersRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_project_get_issue_headersResponse">
  <part name="return" type="tns:IssueHeaderDataArray" /></message>
<message name="mc_project_get_usersRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="access" type="xsd:integer" /></message>
<message name="mc_project_get_usersResponse">
  <part name="return" type="tns:AccountDataArray" /></message>
<message name="mc_projects_get_user_accessibleRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" /></message>
<message name="mc_projects_get_user_accessibleResponse">
  <part name="return" type="tns:ProjectDataArray" /></message>
<message name="mc_project_get_categoriesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_project_get_categoriesResponse">
  <part name="return" type="tns:StringArray" /></message>
<message name="mc_project_add_categoryRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="p_category_name" type="xsd:string" /></message>
<message name="mc_project_add_categoryResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_project_delete_categoryRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="p_category_name" type="xsd:string" /></message>
<message name="mc_project_delete_categoryResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_project_rename_category_by_nameRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="p_category_name" type="xsd:string" />
  <part name="p_category_name_new" type="xsd:string" />
  <part name="p_assigned_to" type="xsd:integer" /></message>
<message name="mc_project_rename_category_by_nameResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_project_get_versionsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_project_get_versionsResponse">
  <part name="return" type="tns:ProjectVersionDataArray" /></message>
<message name="mc_project_version_addRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="version" type="tns:ProjectVersionData" /></message>
<message name="mc_project_version_addResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_project_version_updateRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="version_id" type="xsd:integer" />
  <part name="version" type="tns:ProjectVersionData" /></message>
<message name="mc_project_version_updateResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_project_version_deleteRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="version_id" type="xsd:integer" /></message>
<message name="mc_project_version_deleteResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_project_get_released_versionsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_project_get_released_versionsResponse">
  <part name="return" type="tns:ProjectVersionDataArray" /></message>
<message name="mc_project_get_unreleased_versionsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_project_get_unreleased_versionsResponse">
  <part name="return" type="tns:ProjectVersionDataArray" /></message>
<message name="mc_project_get_attachmentsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_project_get_attachmentsResponse">
  <part name="return" type="tns:ProjectAttachmentDataArray" /></message>
<message name="mc_project_get_custom_fieldsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_project_get_custom_fieldsResponse">
  <part name="return" type="tns:CustomFieldDefinitionDataArray" /></message>
<message name="mc_project_attachment_getRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_attachment_id" type="xsd:integer" /></message>
<message name="mc_project_attachment_getResponse">
  <part name="return" type="xsd:base64Binary" /></message>
<message name="mc_project_attachment_addRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="name" type="xsd:string" />
  <part name="title" type="xsd:string" />
  <part name="description" type="xsd:string" />
  <part name="file_type" type="xsd:string" />
  <part name="content" type="xsd:base64Binary" /></message>
<message name="mc_project_attachment_addResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_project_attachment_deleteRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_attachment_id" type="xsd:integer" /></message>
<message name="mc_project_attachment_deleteResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_project_get_all_subprojectsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_project_get_all_subprojectsResponse">
  <part name="return" type="tns:StringArray" /></message>
<message name="mc_filter_getRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" /></message>
<message name="mc_filter_getResponse">
  <part name="return" type="tns:FilterDataArray" /></message>
<message name="mc_filter_get_issuesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="filter_id" type="xsd:integer" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_filter_get_issuesResponse">
  <part name="return" type="tns:IssueDataArray" /></message>
<message name="mc_filter_get_issue_headersRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="filter_id" type="xsd:integer" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_filter_get_issue_headersResponse">
  <part name="return" type="tns:IssueHeaderDataArray" /></message>
<message name="mc_filter_search_issue_headersRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="filter" type="tns:FilterSearchData" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_filter_search_issue_headersResponse">
  <part name="return" type="tns:IssueHeaderDataArray" /></message>
<message name="mc_filter_search_issuesRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="filter" type="tns:FilterSearchData" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_filter_search_issuesResponse">
  <part name="return" type="tns:IssueDataArray" /></message>
<message name="mc_filter_search_issue_idsRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="filter" type="tns:FilterSearchData" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_filter_search_issue_idsResponse">
  <part name="return" type="tns:IntegerArray" /></message>
<message name="mc_config_get_stringRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="config_var" type="xsd:string" /></message>
<message name="mc_config_get_stringResponse">
  <part name="return" type="xsd:string" /></message>
<message name="mc_issue_checkinRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="issue_id" type="xsd:integer" />
  <part name="comment" type="xsd:string" />
  <part name="fixed" type="xsd:boolean" /></message>
<message name="mc_issue_checkinResponse">
  <part name="return" type="xsd:boolean" /></message>
<message name="mc_user_pref_get_prefRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="project_id" type="xsd:integer" />
  <part name="pref_name" type="xsd:string" /></message>
<message name="mc_user_pref_get_prefResponse">
  <part name="return" type="xsd:string" /></message>
<message name="mc_user_profiles_get_allRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_user_profiles_get_allResponse">
  <part name="return" type="tns:ProfileDataSearchResult" /></message>
<message name="mc_tag_get_allRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="page_number" type="xsd:integer" />
  <part name="per_page" type="xsd:integer" /></message>
<message name="mc_tag_get_allResponse">
  <part name="return" type="tns:TagDataSearchResult" /></message>
<message name="mc_tag_addRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="tag" type="tns:TagData" /></message>
<message name="mc_tag_addResponse">
  <part name="return" type="xsd:integer" /></message>
<message name="mc_tag_deleteRequest">
  <part name="username" type="xsd:string" />
  <part name="password" type="xsd:string" />
  <part name="tag_id" type="xsd:integer" /></message>
<message name="mc_tag_deleteResponse">
  <part name="return" type="xsd:boolean" /></message>
<portType name="MantisConnectPortType">
  <operation name="mc_version">
    <input message="tns:mc_versionRequest"/>
    <output message="tns:mc_versionResponse"/>
  </operation>
  <operation name="mc_login">
    <documentation>Log the user in and get their information.</documentation>
    <input message="tns:mc_loginRequest"/>
    <output message="tns:mc_loginResponse"/>
  </operation>
  <operation name="mc_enum_status">
    <documentation>Get the enumeration for statuses.</documentation>
    <input message="tns:mc_enum_statusRequest"/>
    <output message="tns:mc_enum_statusResponse"/>
  </operation>
  <operation name="mc_enum_priorities">
    <documentation>Get the enumeration for priorities.</documentation>
    <input message="tns:mc_enum_prioritiesRequest"/>
    <output message="tns:mc_enum_prioritiesResponse"/>
  </operation>
  <operation name="mc_enum_severities">
    <documentation>Get the enumeration for severities.</documentation>
    <input message="tns:mc_enum_severitiesRequest"/>
    <output message="tns:mc_enum_severitiesResponse"/>
  </operation>
  <operation name="mc_enum_reproducibilities">
    <documentation>Get the enumeration for reproducibilities.</documentation>
    <input message="tns:mc_enum_reproducibilitiesRequest"/>
    <output message="tns:mc_enum_reproducibilitiesResponse"/>
  </operation>
  <operation name="mc_enum_projections">
    <documentation>Get the enumeration for projections.</documentation>
    <input message="tns:mc_enum_projectionsRequest"/>
    <output message="tns:mc_enum_projectionsResponse"/>
  </operation>
  <operation name="mc_enum_etas">
    <documentation>Get the enumeration for ETAs.</documentation>
    <input message="tns:mc_enum_etasRequest"/>
    <output message="tns:mc_enum_etasResponse"/>
  </operation>
  <operation name="mc_enum_resolutions">
    <documentation>Get the enumeration for resolutions.</documentation>
    <input message="tns:mc_enum_resolutionsRequest"/>
    <output message="tns:mc_enum_resolutionsResponse"/>
  </operation>
  <operation name="mc_enum_access_levels">
    <documentation>Get the enumeration for access levels.</documentation>
    <input message="tns:mc_enum_access_levelsRequest"/>
    <output message="tns:mc_enum_access_levelsResponse"/>
  </operation>
  <operation name="mc_enum_project_status">
    <documentation>Get the enumeration for project statuses.</documentation>
    <input message="tns:mc_enum_project_statusRequest"/>
    <output message="tns:mc_enum_project_statusResponse"/>
  </operation>
  <operation name="mc_enum_project_view_states">
    <documentation>Get the enumeration for project view states.</documentation>
    <input message="tns:mc_enum_project_view_statesRequest"/>
    <output message="tns:mc_enum_project_view_statesResponse"/>
  </operation>
  <operation name="mc_enum_view_states">
    <documentation>Get the enumeration for view states.</documentation>
    <input message="tns:mc_enum_view_statesRequest"/>
    <output message="tns:mc_enum_view_statesResponse"/>
  </operation>
  <operation name="mc_enum_custom_field_types">
    <documentation>Get the enumeration for custom field types.</documentation>
    <input message="tns:mc_enum_custom_field_typesRequest"/>
    <output message="tns:mc_enum_custom_field_typesResponse"/>
  </operation>
  <operation name="mc_enum_get">
    <documentation>Get the enumeration for the specified enumeration type.</documentation>
    <input message="tns:mc_enum_getRequest"/>
    <output message="tns:mc_enum_getResponse"/>
  </operation>
  <operation name="mc_issue_exists">
    <documentation>Check there exists an issue with the specified id.</documentation>
    <input message="tns:mc_issue_existsRequest"/>
    <output message="tns:mc_issue_existsResponse"/>
  </operation>
  <operation name="mc_issue_get">
    <documentation>Get the issue with the specified id.</documentation>
    <input message="tns:mc_issue_getRequest"/>
    <output message="tns:mc_issue_getResponse"/>
  </operation>
  <operation name="mc_issues_get">
    <documentation>Get all issues matching the ids.</documentation>
    <input message="tns:mc_issues_getRequest"/>
    <output message="tns:mc_issues_getResponse"/>
  </operation>
  <operation name="mc_issues_get_header">
    <documentation>Get all issues header matching the ids.</documentation>
    <input message="tns:mc_issues_get_headerRequest"/>
    <output message="tns:mc_issues_get_headerResponse"/>
  </operation>
  <operation name="mc_issue_get_history">
    <documentation>Get the history of the issue with the specified id.</documentation>
    <input message="tns:mc_issue_get_historyRequest"/>
    <output message="tns:mc_issue_get_historyResponse"/>
  </operation>
  <operation name="mc_issue_get_biggest_id">
    <documentation>Get the latest submitted issue in the specified project.</documentation>
    <input message="tns:mc_issue_get_biggest_idRequest"/>
    <output message="tns:mc_issue_get_biggest_idResponse"/>
  </operation>
  <operation name="mc_issue_get_id_from_summary">
    <documentation>Get the id of the issue with the specified summary.</documentation>
    <input message="tns:mc_issue_get_id_from_summaryRequest"/>
    <output message="tns:mc_issue_get_id_from_summaryResponse"/>
  </operation>
  <operation name="mc_issue_add">
    <documentation>Submit the specified issue details.</documentation>
    <input message="tns:mc_issue_addRequest"/>
    <output message="tns:mc_issue_addResponse"/>
  </operation>
  <operation name="mc_issue_update">
    <documentation>Update Issue method.</documentation>
    <input message="tns:mc_issue_updateRequest"/>
    <output message="tns:mc_issue_updateResponse"/>
  </operation>
  <operation name="mc_issue_set_tags">
    <documentation>Sets the tags for a specified issue.</documentation>
    <input message="tns:mc_issue_set_tagsRequest"/>
    <output message="tns:mc_issue_set_tagsResponse"/>
  </operation>
  <operation name="mc_issue_delete">
    <documentation>Delete the issue with the specified id.</documentation>
    <input message="tns:mc_issue_deleteRequest"/>
    <output message="tns:mc_issue_deleteResponse"/>
  </operation>
  <operation name="mc_issue_note_add">
    <documentation>Submit a new note.</documentation>
    <input message="tns:mc_issue_note_addRequest"/>
    <output message="tns:mc_issue_note_addResponse"/>
  </operation>
  <operation name="mc_issue_note_delete">
    <documentation>Delete the note with the specified id.</documentation>
    <input message="tns:mc_issue_note_deleteRequest"/>
    <output message="tns:mc_issue_note_deleteResponse"/>
  </operation>
  <operation name="mc_issue_note_update">
    <documentation>Update a specific note of a specific issue.</documentation>
    <input message="tns:mc_issue_note_updateRequest"/>
    <output message="tns:mc_issue_note_updateResponse"/>
  </operation>
  <operation name="mc_issue_relationship_add">
    <documentation>Submit a new relationship.</documentation>
    <input message="tns:mc_issue_relationship_addRequest"/>
    <output message="tns:mc_issue_relationship_addResponse"/>
  </operation>
  <operation name="mc_issue_relationship_delete">
    <documentation>Delete the relationship for the specified issue.</documentation>
    <input message="tns:mc_issue_relationship_deleteRequest"/>
    <output message="tns:mc_issue_relationship_deleteResponse"/>
  </operation>
  <operation name="mc_issue_attachment_add">
    <documentation>Submit a new issue attachment.</documentation>
    <input message="tns:mc_issue_attachment_addRequest"/>
    <output message="tns:mc_issue_attachment_addResponse"/>
  </operation>
  <operation name="mc_issue_attachment_delete">
    <documentation>Delete the issue attachment with the specified id.</documentation>
    <input message="tns:mc_issue_attachment_deleteRequest"/>
    <output message="tns:mc_issue_attachment_deleteResponse"/>
  </operation>
  <operation name="mc_issue_attachment_get">
    <documentation>Get the data for the specified issue attachment.</documentation>
    <input message="tns:mc_issue_attachment_getRequest"/>
    <output message="tns:mc_issue_attachment_getResponse"/>
  </operation>
  <operation name="mc_project_add">
    <documentation>Add a new project to the tracker (must have admin privileges)</documentation>
    <input message="tns:mc_project_addRequest"/>
    <output message="tns:mc_project_addResponse"/>
  </operation>
  <operation name="mc_project_delete">
    <documentation>Delete a project from the tracker (must have admin privileges)</documentation>
    <input message="tns:mc_project_deleteRequest"/>
    <output message="tns:mc_project_deleteResponse"/>
  </operation>
  <operation name="mc_project_update">
    <documentation>Update a specific project to the tracker (must have admin privileges)</documentation>
    <input message="tns:mc_project_updateRequest"/>
    <output message="tns:mc_project_updateResponse"/>
  </operation>
  <operation name="mc_project_get_id_from_name">
    <documentation>Get the id of the project with the specified name.</documentation>
    <input message="tns:mc_project_get_id_from_nameRequest"/>
    <output message="tns:mc_project_get_id_from_nameResponse"/>
  </operation>
  <operation name="mc_project_get_issues_for_user">
    <documentation>Get the issues filtered by the specified user within the specified project. Supported types include "assigned", "monitored", "reported".  Pass &quot;-1&quot; for the per_page parameter to get all issues.  Use project id &quot;0&quot; for all projects.</documentation>
    <input message="tns:mc_project_get_issues_for_userRequest"/>
    <output message="tns:mc_project_get_issues_for_userResponse"/>
  </operation>
  <operation name="mc_project_get_issues">
    <documentation>Get the issues that match the specified project id and paging details. Pass &quot;-1&quot; for the per_page parameter to get all issues.</documentation>
    <input message="tns:mc_project_get_issuesRequest"/>
    <output message="tns:mc_project_get_issuesResponse"/>
  </operation>
  <operation name="mc_project_get_issue_headers">
    <documentation>Get the issue headers that match the specified project id and paging details. Pass &quot;-1&quot; for the per_page parameter to get all issues.</documentation>
    <input message="tns:mc_project_get_issue_headersRequest"/>
    <output message="tns:mc_project_get_issue_headersResponse"/>
  </operation>
  <operation name="mc_project_get_users">
    <documentation>Get appropriate users assigned to a project by access level.</documentation>
    <input message="tns:mc_project_get_usersRequest"/>
    <output message="tns:mc_project_get_usersResponse"/>
  </operation>
  <operation name="mc_projects_get_user_accessible">
    <documentation>Get the list of projects that are accessible to the logged in user.</documentation>
    <input message="tns:mc_projects_get_user_accessibleRequest"/>
    <output message="tns:mc_projects_get_user_accessibleResponse"/>
  </operation>
  <operation name="mc_project_get_categories">
    <documentation>Get the categories belonging to the specified project.</documentation>
    <input message="tns:mc_project_get_categoriesRequest"/>
    <output message="tns:mc_project_get_categoriesResponse"/>
  </operation>
  <operation name="mc_project_add_category">
    <documentation>Add a category of specific project.</documentation>
    <input message="tns:mc_project_add_categoryRequest"/>
    <output message="tns:mc_project_add_categoryResponse"/>
  </operation>
  <operation name="mc_project_delete_category">
    <documentation>Delete a category of specific project.</documentation>
    <input message="tns:mc_project_delete_categoryRequest"/>
    <output message="tns:mc_project_delete_categoryResponse"/>
  </operation>
  <operation name="mc_project_rename_category_by_name">
    <documentation>Rename a category of specific project.</documentation>
    <input message="tns:mc_project_rename_category_by_nameRequest"/>
    <output message="tns:mc_project_rename_category_by_nameResponse"/>
  </operation>
  <operation name="mc_project_get_versions">
    <documentation>Get the versions belonging to the specified project.</documentation>
    <input message="tns:mc_project_get_versionsRequest"/>
    <output message="tns:mc_project_get_versionsResponse"/>
  </operation>
  <operation name="mc_project_version_add">
    <documentation>Submit the specified version details.</documentation>
    <input message="tns:mc_project_version_addRequest"/>
    <output message="tns:mc_project_version_addResponse"/>
  </operation>
  <operation name="mc_project_version_update">
    <documentation>Update version method.</documentation>
    <input message="tns:mc_project_version_updateRequest"/>
    <output message="tns:mc_project_version_updateResponse"/>
  </operation>
  <operation name="mc_project_version_delete">
    <documentation>Delete the version with the specified id.</documentation>
    <input message="tns:mc_project_version_deleteRequest"/>
    <output message="tns:mc_project_version_deleteResponse"/>
  </operation>
  <operation name="mc_project_get_released_versions">
    <documentation>Get the released versions that belong to the specified project.</documentation>
    <input message="tns:mc_project_get_released_versionsRequest"/>
    <output message="tns:mc_project_get_released_versionsResponse"/>
  </operation>
  <operation name="mc_project_get_unreleased_versions">
    <documentation>Get the unreleased version that belong to the specified project.</documentation>
    <input message="tns:mc_project_get_unreleased_versionsRequest"/>
    <output message="tns:mc_project_get_unreleased_versionsResponse"/>
  </operation>
  <operation name="mc_project_get_attachments">
    <documentation>Get the attachments that belong to the specified project.</documentation>
    <input message="tns:mc_project_get_attachmentsRequest"/>
    <output message="tns:mc_project_get_attachmentsResponse"/>
  </operation>
  <operation name="mc_project_get_custom_fields">
    <documentation>Get the custom fields that belong to the specified project.</documentation>
    <input message="tns:mc_project_get_custom_fieldsRequest"/>
    <output message="tns:mc_project_get_custom_fieldsResponse"/>
  </operation>
  <operation name="mc_project_attachment_get">
    <documentation>Get the data for the specified project attachment.</documentation>
    <input message="tns:mc_project_attachment_getRequest"/>
    <output message="tns:mc_project_attachment_getResponse"/>
  </operation>
  <operation name="mc_project_attachment_add">
    <documentation>Submit a new project attachment.</documentation>
    <input message="tns:mc_project_attachment_addRequest"/>
    <output message="tns:mc_project_attachment_addResponse"/>
  </operation>
  <operation name="mc_project_attachment_delete">
    <documentation>Delete the project attachment with the specified id.</documentation>
    <input message="tns:mc_project_attachment_deleteRequest"/>
    <output message="tns:mc_project_attachment_deleteResponse"/>
  </operation>
  <operation name="mc_project_get_all_subprojects">
    <documentation>Get the subprojects ID of a specific project.</documentation>
    <input message="tns:mc_project_get_all_subprojectsRequest"/>
    <output message="tns:mc_project_get_all_subprojectsResponse"/>
  </operation>
  <operation name="mc_filter_get">
    <documentation>Get the filters defined for the specified project.</documentation>
    <input message="tns:mc_filter_getRequest"/>
    <output message="tns:mc_filter_getResponse"/>
  </operation>
  <operation name="mc_filter_get_issues">
    <documentation>Get the issues that match the specified filter and paging details. Pass &quot;-1&quot; for the per_page parameter to get all issues.</documentation>
    <input message="tns:mc_filter_get_issuesRequest"/>
    <output message="tns:mc_filter_get_issuesResponse"/>
  </operation>
  <operation name="mc_filter_get_issue_headers">
    <documentation>Get the issue headers that match the specified filter and paging details.  Pass &quot;-1&quot; for the per_page parameter to get all issues.</documentation>
    <input message="tns:mc_filter_get_issue_headersRequest"/>
    <output message="tns:mc_filter_get_issue_headersResponse"/>
  </operation>
  <operation name="mc_filter_search_issue_headers">
    <documentation>Get the issue headers that match the custom filter and paging details.</documentation>
    <input message="tns:mc_filter_search_issue_headersRequest"/>
    <output message="tns:mc_filter_search_issue_headersResponse"/>
  </operation>
  <operation name="mc_filter_search_issues">
    <documentation>Get the issues that match the custom filter and paging details.</documentation>
    <input message="tns:mc_filter_search_issuesRequest"/>
    <output message="tns:mc_filter_search_issuesResponse"/>
  </operation>
  <operation name="mc_filter_search_issue_ids">
    <documentation>Get the issue ids that match the custom filter and paging details.</documentation>
    <input message="tns:mc_filter_search_issue_idsRequest"/>
    <output message="tns:mc_filter_search_issue_idsResponse"/>
  </operation>
  <operation name="mc_config_get_string">
    <documentation>Get the value for the specified configuration variable.</documentation>
    <input message="tns:mc_config_get_stringRequest"/>
    <output message="tns:mc_config_get_stringResponse"/>
  </operation>
  <operation name="mc_issue_checkin">
    <documentation>Notifies MantisBT of a check-in for the issue with the specified id.</documentation>
    <input message="tns:mc_issue_checkinRequest"/>
    <output message="tns:mc_issue_checkinResponse"/>
  </operation>
  <operation name="mc_user_pref_get_pref">
    <documentation>Get the value for the specified user preference.</documentation>
    <input message="tns:mc_user_pref_get_prefRequest"/>
    <output message="tns:mc_user_pref_get_prefResponse"/>
  </operation>
  <operation name="mc_user_profiles_get_all">
    <documentation>Get profiles available to the current user.</documentation>
    <input message="tns:mc_user_profiles_get_allRequest"/>
    <output message="tns:mc_user_profiles_get_allResponse"/>
  </operation>
  <operation name="mc_tag_get_all">
    <documentation>Gets all the tags.</documentation>
    <input message="tns:mc_tag_get_allRequest"/>
    <output message="tns:mc_tag_get_allResponse"/>
  </operation>
  <operation name="mc_tag_add">
    <documentation>Creates a tag.</documentation>
    <input message="tns:mc_tag_addRequest"/>
    <output message="tns:mc_tag_addResponse"/>
  </operation>
  <operation name="mc_tag_delete">
    <documentation>Deletes a tag.</documentation>
    <input message="tns:mc_tag_deleteRequest"/>
    <output message="tns:mc_tag_deleteResponse"/>
  </operation>
</portType>
<binding name="MantisConnectBinding" type="tns:MantisConnectPortType">
  <soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
  <operation name="mc_version">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_version" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_login">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_login" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_status">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_status" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_priorities">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_priorities" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_severities">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_severities" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_reproducibilities">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_reproducibilities" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_projections">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_projections" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_etas">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_etas" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_resolutions">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_resolutions" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_access_levels">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_access_levels" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_project_status">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_project_status" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_project_view_states">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_project_view_states" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_view_states">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_view_states" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_custom_field_types">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_custom_field_types" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_enum_get">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_enum_get" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_exists">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_exists" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_get">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_get" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issues_get">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issues_get" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issues_get_header">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issues_get_header" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_get_history">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_get_history" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_get_biggest_id">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_get_biggest_id" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_get_id_from_summary">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_get_id_from_summary" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_add">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_add" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_update">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_update" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_set_tags">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_set_tags" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_delete">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_delete" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_note_add">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_note_add" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_note_delete">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_note_delete" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_note_update">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_note_update" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_relationship_add">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_relationship_add" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_relationship_delete">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_relationship_delete" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_attachment_add">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_attachment_add" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_attachment_delete">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_attachment_delete" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_attachment_get">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_attachment_get" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_add">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_add" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_delete">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_delete" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_update">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_update" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_id_from_name">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_id_from_name" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_issues_for_user">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_issues_for_user" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_issues">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_issues" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_issue_headers">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_issue_headers" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_users">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_users" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_projects_get_user_accessible">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_projects_get_user_accessible" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_categories">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_categories" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_add_category">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_add_category" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_delete_category">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_delete_category" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_rename_category_by_name">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_rename_category_by_name" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_versions">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_versions" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_version_add">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_version_add" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_version_update">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_version_update" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_version_delete">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_version_delete" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_released_versions">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_released_versions" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_unreleased_versions">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_unreleased_versions" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_attachments">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_attachments" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_custom_fields">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_custom_fields" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_attachment_get">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_attachment_get" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_attachment_add">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_attachment_add" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_attachment_delete">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_attachment_delete" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_project_get_all_subprojects">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_project_get_all_subprojects" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_filter_get">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_filter_get" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_filter_get_issues">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_filter_get_issues" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_filter_get_issue_headers">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_filter_get_issue_headers" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_filter_search_issue_headers">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_filter_search_issue_headers" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_filter_search_issues">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_filter_search_issues" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_filter_search_issue_ids">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_filter_search_issue_ids" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_config_get_string">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_config_get_string" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_issue_checkin">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_issue_checkin" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_user_pref_get_pref">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_user_pref_get_pref" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_user_profiles_get_all">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_user_profiles_get_all" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_tag_get_all">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_tag_get_all" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_tag_add">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_tag_add" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
  <operation name="mc_tag_delete">
    <soap:operation soapAction="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php/mc_tag_delete" style="rpc"/>
    <input><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
    <output><soap:body use="encoded" namespace="http://futureware.biz/mantisconnect" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
  </operation>
</binding>
<service name="MantisConnect">
  <port name="MantisConnectPort" binding="tns:MantisConnectBinding">
    <soap:address location="https://www.mantisbt.org/bugs/api/soap/mantisconnect.php"/>
  </port>
</service>
</definitions>
