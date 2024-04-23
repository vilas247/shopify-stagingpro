<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'team_create',
            ],
            [
                'id'    => 18,
                'title' => 'team_edit',
            ],
            [
                'id'    => 19,
                'title' => 'team_show',
            ],
            [
                'id'    => 20,
                'title' => 'team_delete',
            ],
            [
                'id'    => 21,
                'title' => 'team_access',
            ],
            [
                'id'    => 22,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 23,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 25,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 26,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 27,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 28,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 29,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 30,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 31,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 32,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 33,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 34,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 35,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 36,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 37,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 38,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_create',
            ],
            [
                'id'    => 40,
                'title' => 'task_edit',
            ],
            [
                'id'    => 41,
                'title' => 'task_show',
            ],
            [
                'id'    => 42,
                'title' => 'task_delete',
            ],
            [
                'id'    => 43,
                'title' => 'task_access',
            ],
            [
                'id'    => 44,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 45,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 46,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 47,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 48,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 49,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 50,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 51,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 52,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 53,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 54,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 55,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 56,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 57,
                'title' => 'currency_create',
            ],
            [
                'id'    => 58,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 59,
                'title' => 'currency_show',
            ],
            [
                'id'    => 60,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 61,
                'title' => 'currency_access',
            ],
            [
                'id'    => 62,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 63,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 64,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 65,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 66,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 67,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 68,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 69,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 70,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 71,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 72,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 73,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 74,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 75,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 76,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 77,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 78,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 79,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 80,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 81,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 82,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 83,
                'title' => 'client_create',
            ],
            [
                'id'    => 84,
                'title' => 'client_edit',
            ],
            [
                'id'    => 85,
                'title' => 'client_show',
            ],
            [
                'id'    => 86,
                'title' => 'client_delete',
            ],
            [
                'id'    => 87,
                'title' => 'client_access',
            ],
            [
                'id'    => 88,
                'title' => 'project_create',
            ],
            [
                'id'    => 89,
                'title' => 'project_edit',
            ],
            [
                'id'    => 90,
                'title' => 'project_show',
            ],
            [
                'id'    => 91,
                'title' => 'project_delete',
            ],
            [
                'id'    => 92,
                'title' => 'project_access',
            ],
            [
                'id'    => 93,
                'title' => 'note_create',
            ],
            [
                'id'    => 94,
                'title' => 'note_edit',
            ],
            [
                'id'    => 95,
                'title' => 'note_show',
            ],
            [
                'id'    => 96,
                'title' => 'note_delete',
            ],
            [
                'id'    => 97,
                'title' => 'note_access',
            ],
            [
                'id'    => 98,
                'title' => 'document_create',
            ],
            [
                'id'    => 99,
                'title' => 'document_edit',
            ],
            [
                'id'    => 100,
                'title' => 'document_show',
            ],
            [
                'id'    => 101,
                'title' => 'document_delete',
            ],
            [
                'id'    => 102,
                'title' => 'document_access',
            ],
            [
                'id'    => 103,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 104,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 105,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 106,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 107,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 108,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 109,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 110,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 111,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 112,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 113,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
