truncate table wishes;

insert into wishes (user_id, description, link, claimed_by, claimed_at, created_at, updated_at, deleted_at)
select u.id user_id
,      v.omschrijving description
,      ifnull(v.link, v.plaatje) link
,      uc.id claimed_by
,      v.claimed_date claimed_at
,      v.create_date created_at
,      v.change_date updated_at
,      case when v.deleted = 1 or v.gekregen = 1 then v.change_date else null end deleted_at
from   verlanglijstjes v
join   familie f on v.fam_id = f.id
join   users u on f.naam = u.name
left join familie fc on v.claimed_by = fc.id
left join users uc on fc.naam = uc.name
order by created_at;
